<?php

namespace HKSManpower\AutomobileTheme\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Webkul\Category\Repositories\CategoryRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AutomobileThemeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Category repository instance.
     *
     * @var \Webkul\Category\Repositories\CategoryRepository
     */
    protected $categoryRepository;

    private $categories = [
        [
            "name" => "Automotive",
            "description" => "Automotive description",
            "position" => 1,
            "slug" => "Automotive",
            "parent_id" => 'root',
            "status" => 0
        ],
        [
            "name" => "Home & Garden",
            "description" => "Home & Garden description",
            "position" => 2,
            "slug" => "Home & Garden",
            "parent_id" => 'root'
        ],
        [
            "name" => "Electronics & Computers",
            "description" => "Electronics & Computers description",
            "position" => 3,
            "slug" => "Electronics & Computers",
            "parent_id" => 'root'
        ],
        [
            "name" => "Sports & Fitness",
            "description" => "Sports & Fitness description",
            "position" => 4,
            "slug" => "Sports & Fitness",
            "parent_id" => 'root'
        ],
        [
            "name" => "Offer Products",
            "description" => "This category displays all products in offer",
            "position" => 5,
            "slug" => "Offer Products",
            "parent_id" => 'root',
            "status" => 0
        ],
        [
            "name" => "Discount-5",
            "description" => "This category contains all products having 5% discount",
            "position" => 6,
            "slug" => "Discount 5",
            "parent_id" => 'root',
            "status" => 0
        ],
        [
            "name" => "Discount-10",
            "description" => "This category contains all products having 10% discount",
            "position" => 7,
            "slug" => "Discount 10",
            "parent_id" => 'root',
            "status" => 0
        ],
        [
            "name" => "Discount-15",
            "description" => "This category contains all products having 15% discount",
            "position" => 8,
            "slug" => "Discount 15",
            "parent_id" => 'root',
            "status" => 0
        ],
        [
            "name" => "Discount-20",
            "description" => "This category contains all products having 20% discount",
            "position" => 9,
            "slug" => "Discount 20",
            "parent_id" => 'root',
            "status" => 0
        ],
        [
            "name" => "MUD FALP",
            "description" => "MUD FALP description",
            "position" => 1,
            "slug" => "MUD FALP",
            "parent_id" => 'automotive'
        ],
    
        [
            "name" => "SIDE MIRROR",
            "description" => "SIDE MIRROR description",
            "position" => 2,
            "slug" => "SIDE MIRROR",
            "parent_id" => 'automotive'
        ],

        [
            "name" => "Convex",
            "description" => "SIDE MIRROR description",
            "position" => 2,
            "slug" => "convex",
            "parent_id" => 'automotive'
        ],
        [
            "name" => "SWIFT TYPE 1",
            "description" => "SWIFT TYPE 1 description",
            "position" => 1,
            "slug" => "SWIFT TYPE 1",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "SWIFT TYPE 2",
            "description" => "SWIFT TYPE 2 description",
            "position" => 2,
            "slug" => "SWIFT TYPE 2",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "SWIFT TYPE 3",
            "description" => "SWIFT TYPE 3 description",
            "position" => 3,
            "slug" => "SWIFT TYPE 3",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "SWIFT TYPE 4",
            "description" => "SWIFT TYPE 4 description",
            "position" => 4,
            "slug" => "SWIFT TYPE 4",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "DEZIRE TYPE 1",
            "description" => "DEZIRE TYPE 1 description",
            "position" => 5,
            "slug" => "DEZIRE TYPE 1",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "DEZIRE TYPE 2",
            "description" => "DEZIRE TYPE 2 description",
            "position" => 6,
            "slug" => "DEZIRE TYPE 2",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "DEZIRE TYPE 3",
            "description" => "DEZIRE TYPE 3 description",
            "position" => 7,
            "slug" => "DEZIRE TYPE 3",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ALTO 800",
            "description" => "ALTO 800 description",
            "position" => 8,
            "slug" => "ALTO 800",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ALTO K-10 TYPE 1",
            "description" => "ALTO K-10 TYPE 1 description",
            "position" => 9,
            "slug" => "ALTO K-10 TYPE 1",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ALTO K-10 TYPE 2",
            "description" => "ALTO K-10 TYPE 2 description",
            "position" => 10,
            "slug" => "ALTO K-10 TYPE 2",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "WAGON R TYPE 2",
            "description" => "WAGON R TYPE 2 description",
            "position" => 11,
            "slug" => "WAGON R TYPE 2",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "WAGON R TYPE 3",
            "description" => "WAGON R TYPE 3 description",
            "position" => 12,
            "slug" => "WAGON R TYPE 3",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "WAGON R TYPE 4 k series",
            "description" => "WAGON R TYPE 4 k series description",
            "position" => 13,
            "slug" => "WAGON R TYPE 4 k series",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "WAGON R TYPE 2019",
            "description" => "WAGON R TYPE 2019 description",
            "position" => 14,
            "slug" => "WAGON R TYPE 2019",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "RITZ",
            "description" => "RITZ description",
            "position" => 15,
            "slug" => "RITZ",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "CELERIO TYPE 1",
            "description" => "CELERIO TYPE 1 description",
            "position" => 16,
            "slug" => "CELERIO TYPE 1",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "CELERIO TYPE 2",
            "description" => "CELERIO TYPE 2 description",
            "position" => 17,
            "slug" => "CELERIO TYPE 2",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "EECO REAR ",
            "description" => "EECO REAR  description",
            "position" => 18,
            "slug" => "EECO REAR ",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "BREEZA",
            "description" => "BREEZA description",
            "position" => 19,
            "slug" =>  "BREEZA",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "BALENO N/M",
            "description" => "BALENO N/M description",
            "position" => 20,
            "slug" => "BALENO N/M",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ALTO",
            "description" => "ALTO description",
            "position" => 21,
            "slug" => "ALTO",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ERTIGA TYPE 1",
            "description" => "ERTIGA TYPE 1 description",
            "position" => 22,
            "slug" => "ERTIGA TYPE 1",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ERTIGA TYPE 2018",
            "description" => "ERTIGA TYPE 2018 description",
            "position" => 23,
            "slug" => "ERTIGA TYPE 2018",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "S PRESSO",
            "description" => "S PRESSO description",
            "position" => 24,
            "slug" => "S PRESSO",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "CIAZ",
            "description" => "CIAZ description",
            "position" => 25,
            "slug" => "CIAZ",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ZEN ESTILO TYPE 1",
            "description" => "ZEN ESTILO TYPE 1 description",
            "position" => 26,
            "slug" => "ZEN ESTILO TYPE 1",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ZEN ESTILO TYPE 2",
            "description" => "ZEN ESTILO TYPE 2 description",
            "position" => 27,
            "slug" => "ZEN ESTILO TYPE 2",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "XL6",
            "description" => "XL6 description",
            "position" => 28,
            "slug" => "XL6",
            "parent_id" => 'mud-falp'
        ],
        [
            "name" => "ERTIGA WB LEFT",
            "description" => "ERTIGA WB LEFT description",
            "position" => 29,
            "slug" => "ERTIGA WB LEFT",
            "parent_id" => 'convex'
        ],
        [
            "name" => "ERTIGA WB RH",
            "description" => "ERTIGA WB RH description",
            "position" => 30,
            "slug" => "ERTIGA WB RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "CELERI LXI LH",
            "description" => "CELERI LXI LH description",
            "position" => 31,
            "slug" => "CELERI LXI LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "CELERI LXI RH",
            "description" => "CELERI LXI RH description",
            "position" => 32,
            "slug" => "CELERI LXI RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "SWIFT T1 LH",
            "description" => "SWIFT T1 LH description",
            "position" => 33,
            "slug" => "SWIFT T1 LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "SWIFT T1 RH",
            "description" => "SWIFT T1 RH description",
            "position" => 34,
            "slug" => "SWIFT T1 RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "SWIFT DEZIRE 2019 LXI LH",
            "description" => "SWIFT DEZIRE 2019 LXI LH description",
            "position" => 35,
            "slug" => "SWIFT DEZIRE 2019 LXI LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "SWIFT DEZIRE 2019 LXI RH",
            "description" => "SWIFT DEZIRE 2019 LXI RH description",
            "position" => 36,
            "slug" => "SWIFT DEZIRE 2019 LXI RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "ALTO K10 T2 LXI LH",
            "description" => "ALTO K10 T2 LXI LH description",
            "position" => 37,
            "slug" => "ALTO K10 T2 LXI LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "ALTO K10 T2 LXI RH",
            "description" => "ALTO K10 T2 LXI RH description",
            "position" => 38,
            "slug" => "ALTO K10 T2 LXI RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "ALTO 800 PLAIN LH",
            "description" => "ALTO 800 PLAIN LH description",
            "position" => 39,
            "slug" => "ALTO 800 PLAIN LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "ALTO 800 LXI LH",
            "description" => "ALTO 800 LXI LH description",
            "position" => 40,
            "slug" => "ALTO 800 LXI LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "ALTO 800 LXI RH",
            "description" => "ALTO 800 LXI RH description",
            "position" => 41,
            "slug" => "ALTO 800 LXI RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "ALTO 800 PLAIN RH",
            "description" => "ALTO 800 PLAIN RH description",
            "position" => 42,
            "slug" => "ALTO 800 PLAIN RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "WAGONR K SERIES LH ",
            "description" => "WAGONR K SERIES LH  description",
            "position" => 43,
            "slug" => "WAGONR K SERIES LH ",
            "parent_id" => 'convex'
        ],
        [
            "name" => "WAGONR K SERIES RH ",
            "description" => "WAGONR K SERIES RH  description",
            "position" => 44,
            "slug" => "WAGONR K SERIES RH ",
            "parent_id" => 'convex'
        ],
        [
            "name" => "WAGONR 2019 LH",
            "description" => "WAGONR 2019 LH description",
            "position" => 45,
            "slug" => "WAGONR 2019 LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "WAGONR 2019 RH",
            "description" => "WAGONR 2019 RH description",
            "position" => 46,
            "slug" => "WAGONR 2019 RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "BREZZA AM LH",
            "description" => "BREZZA AM LH description",
            "position" => 47,
            "slug" => "BREZZA AM LH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "BREZZA AM RH",
            "description" => "BREZZA AM RH description",
            "position" => 48,
            "slug" => "BREZZA AM RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "BREZZA WB RH",
            "description" => "BREZZA WB RH description",
            "position" => 49,
            "slug" => "BREZZA WB RH",
            "parent_id" => 'convex'
        ],
        [
            "name" => "BREZZA WB LH",
            "description" => "BREZZA WB LH description",
            "position" => 50,
            "slug" => "BREZZA WB LH",
            "parent_id" => 'convex'
        ],
    ];

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Category\Repositories\CategoryRepository  $categoryRepository
     * @return void
     */
    public function __construct(
        CategoryRepository $categoryRepository
    ) {
        $this->middleware('admin');
        $this->_config = request('_config');
        $this->categoryRepository = $categoryRepository;
    }

    public function createBulkCategories()
    {
        $metaDetails = [
            'locale' => 'all',
            "attributes" => [
                0 => "11"
            ],
            "image" => [
                "image_1" => ""
            ],
            "display_mode" => "products_and_description",
            "status" => 1,
        ];

        foreach ($this->categories as $key => $category) {
            $category = array_merge($metaDetails, $category);

            // format slug
            $slug = strtolower($category['slug']);
            $slug = str_replace('&', '', $slug);
            $slug = str_replace('  ', '-', $slug);
            $slug = str_replace(' ', '-', $slug);

            $category['slug'] = $slug;

            $existingCategory = $this->categoryRepository->findBySlug($category['slug']);

            if (! $existingCategory) {
                $parentCategory = $this->categoryRepository->findBySlug($category['parent_id']);
    
                if ($parentCategory && $parentCategory->id) {
                    $category['parent_id'] = $parentCategory->id;
    
                    $this->categoryRepository->create($category);
                }

                $action = "created";
            } else {
                $this->categoryRepository->delete($existingCategory->id);

                $action = "deleted";
            }
        }

        return response()->json([
            "success" => "Awesome! Categories " . $action
        ]);
    }
}
