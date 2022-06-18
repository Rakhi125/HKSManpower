<?php

namespace HKSManpower\AutomobileTheme\Http\Controllers\Shop;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Product\Repositories\ProductFlatRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
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
     * Create a new controller instance.
     *
     * @param  \Webkul\Product\Repositories\ProductRepository $productRepository
     * @return void
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->_config = request('_config');
        $this->productRepository = $productRepository;
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
        $products = app(ProductFlatRepository::class)->scopeQuery(function ($query) {
            $channel = core()->getRequestedChannelCode();

            $locale = core()->getRequestedLocaleCode();

            return $query->distinct()
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.visible_individually', 1)
                ->where('product_flat.featured', 1)
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->orderByDesc('product_flat.visit_count');
        })->paginate(2);

        $products = ProductResource::collection($products);

        return response()->json([
            'success' => true,
            'products' => $products->items()
        ]);
    }
}
