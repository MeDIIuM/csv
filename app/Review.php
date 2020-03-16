<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * App\Review
 *
 * @method static Builder|Review newModelQuery()
 * @method static Builder|Review newQuery()
 * @method static Builder|Review query()
 * @mixin Eloquent
 */
class Review extends Model
{
    public function getReviewFile()
    {
        $result = DB::select("select * from reviews
                                join users on reviews.user_id = users.id
                                where users.city in ('Волгоград', 'Самара')
                                and (reviews.likes > 10 or (select count(*) from reviews as reviews2
                                join products on reviews2.product_id = products.id
                                where (select avg(ratings.rating) from ratings
                                where users.id = reviews.user_id) >= 4
                                and reviews2.user_id = reviews.user_id and products.price > 2000) > 10)");
        return $result;
    }
}
