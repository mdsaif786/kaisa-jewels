<?php

use Illuminate\Database\Seeder;

class ExternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // stage-1
        //   $lang=\App\Language::all();
        //   $educator=\App\Educator::all();
        //   factory(App\VideoCourse::class,100)->create()->each(function ($user) use ($educator,$lang) {
        //      $user->educators()->attach(
        //        $educator->random(rand(1,3))->pluck('id')->toArray()
        //      );
        //      $user->languages()->attach(
        //        $lang->random(rand(1,2))->pluck('id')->toArray()
        //      );
        // });

        //stage2-
       // factory(App\VideoCourseKeyHighlight::class,100)->create();

         //stage3-
     //  factory(App\VideoCourseRequirement::class,300)->create();
        //stage4-
       // factory(App\VideoCourseReview::class,100)->create();

        //stage6-
        // factory(App\VideoCourseReviewFeedback::class,200)->create();

         //stag7-
       // factory(App\VideoCourseSection::class,200)->create();


        //stag8
        // factory(App\VideoQuestionAnswer::class,200)->create();

        //stage9
        // factory(App\VideoQuestionAnswerReply::class,500)->create();

         //stage10-

      //  factory(App\Lesson::class,100)->create();



        //live classes seeder.
            //stage-1
        //   $lang=\App\Language::all();
        //   $educator=\App\Educator::all();
        //   factory(App\LiveClass::class,100)->create()->each(function ($user) use ($educator,$lang) {
        //      $user->educators()->attach(
        //        $educator->random(rand(1,3))->pluck('id')->toArray()
        //      );
        //      $user->languages()->attach(
        //        $lang->random(rand(1,2))->pluck('id')->toArray()
        //      );
        // });

        //stage-2

      //  factory(App\LiveClassKeyHighlight::class,100)->create();
       // factory(App\LiveClassRequirment::class,100)->create();
        //factory(App\LiveClassReview::class,100)->create();

        //stage-3

       // factory(App\LiveClassReviewFeedback::class,100)->create();
      //  factory(App\LiveClassSection::class,200)->create();
       // factory(App\LiveClassStartDate::class,100)->create();

        // stage-4
      //  factory(App\LiveClassLesson::class,300)->create();


        //!!!!----general---------!!!!//
        //stage-1
        //factory(App\Zone::class,10)->create();
        //stage-2
        //factory(App\Address::class,10)->create();
        //stage-3

       // factory(App\Coupon::class,10)->create();
       // factory(App\Order::class,100)->create();

       // factory(App\OrderItem::class,200)->create();

//        factory(App\CourseWishList::class,20)->create();
  //      factory(App\BlogCategory::class,10)->create();
        ///factory(App\Blog::class,10)->create();

        factory(App\Models\Slider::class,15)->create();



    }
}
