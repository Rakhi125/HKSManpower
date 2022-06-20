<?php

namespace HKSManpower\AutomobileTheme\Http\Controllers\Shop;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Webkul\Product\Repositories\ProductRepository;
use Webkul\Product\Repositories\ProductFlatRepository;
use Webkul\CatalogRule\Repositories\CatalogRuleRepository;
use Webkul\API\Http\Resources\Catalog\Product as ProductResource;

class AutomobileThemeController extends Controller
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * ProductRepository object
     *
     * @var \Webkul\Product\Repositories\ProductRepository
     */
    protected $productRepository;

    /**
     * CatalogRuleRepository object
     *
     * @var \Webkul\CatalogRule\Repositories\CatalogRuleRepository
    */
    protected $catalogRuleRepository;

    /**
     * ProductFlatRepository object
     *
     * @var \Webkul\Product\Repositories\ProductFlatRepository
    */
    protected $productFlatRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Product\Repositories\ProductRepository           $productRepository
     * @param  \Webkul\Product\Repositories\ProductFlatRepository       $productFlatRepository
     * @param  \Webkul\CatalogRule\Repositories\CatalogRuleRepository   $catalogRuleRepository
     * @return void
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductFlatRepository $productFlatRepository,
        CatalogRuleRepository $catalogRuleRepository
    ) {
        $this->_config = request('_config');
        $this->productRepository = $productRepository;
        $this->catalogRuleRepository = $catalogRuleRepository;
        $this->productFlatRepository = $productFlatRepository;
    }

    /**
     * Increment product view count by 1
     */
    public function increaseProductViewCount($eventManager)
    {
        /*
            increase the count only once
            Usage of Cookie stops increasing count if page is getting refreshed
        */
        if (
            !\Cookie::get('previous_url')
            || url()->current() != \Cookie::get('previous_url')
        ) {
            \Cookie::queue('previous_url', url()->current(), 60);

            $productFlat = $eventManager->getParams()['product'];
            $updatedCount = $productFlat->visit_count + 1;
    
            $productFlat->update(['visit_count' => $updatedCount]);
        }


        return true;
    }

    /**
     * Retrieves the trending products
     * 
     * @return \Illuminate\Http\Response
     */
    public function getTrendingProducts()
    {
        $categoryIds = request()->query('category-id');

        $products = app(ProductFlatRepository::class)->scopeQuery(function ($query) use ($categoryIds) {
            $locale = core()->getRequestedLocaleCode();
            $channel = core()->getRequestedChannelCode();

            $qb = $query
                ->leftJoin(
                    'product_categories',
                    'product_categories.product_id',
                    '=',
                    'product_flat.product_id'
                )
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.visible_individually', 1)
                ->whereNotNull('product_flat.url_key')
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->orderByDesc('product_flat.visit_count');

                if ($categoryIds) {
                    $qb->whereIn('product_categories.category_id', explode(',', $categoryIds));
                }

                return $qb;
        })->paginate(2);

        $products = ProductResource::collection($products);

        return response()->json([
            'success' => true,
            'products' => $products
        ]);
    }

    /**
     * Retrieves the discounted products
     * 
     * @return \Illuminate\Http\Response
     */
    public function getDiscountedProducts()
    {
        $isCartRuleApplied = false;
        $categoryId = request()->query('category-id');

        $rules = $this->catalogRuleRepository->all();
        
        foreach ($rules as $key => $rule) {
            foreach ($rule['conditions'] as $conditionKey => $condition) {
                $isCartRuleApplied = in_array($categoryId, $condition['value']);
            }
        }

        if ($isCartRuleApplied) {
            $locale = core()->getRequestedLocaleCode();
            $channel = core()->getRequestedChannelCode();

            $products = $this->productFlatRepository
                ->leftJoin(
                    'product_categories',
                    'product_categories.product_id',
                    '=',
                    'product_flat.product_id'
                )
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.visible_individually', 1)
                ->whereNotNull('product_flat.url_key')
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->orderByDesc('product_flat.visit_count')
                ->where('product_categories.category_id', $categoryId)
                ->get();

            $products = ProductResource::collection($products);
        }

        return response()->json([
            'success' => true,
            'products' => $products ?? []
        ]);
    }
}
