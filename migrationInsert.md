 $exam_categories = array(
            array('name'=>'UPSC','status'=>1,'show_in_header_menu'=>1),
            array('name'=>'ALL STATE PCS EXAM','status'=>1,'show_in_header_menu'=>1),
            array('name'=>'LAW','status'=>1,'show_in_header_menu'=>1),
            array('name'=>'UGC/NET','status'=>1,'show_in_header_menu'=>1),
            array('name'=>'MANAGEMENT','status'=>1,'show_in_header_menu'=>1),
            array('name'=>'RAILWAY','status'=>1,'show_in_header_menu'=>1),
        );
      DB::table('exam_categories')->insert($exam_categories);

       $categories = array(
            array('name'=>'Goverment Exam','status'=>1,'show_in_menu'=>1),
            array('name'=>'School Exam','status'=>1,'show_in_menu'=>1),
            array('name'=>'Professional Exam','status'=>1,'show_in_menu'=>1),
            array('name'=>'Civil Service','status'=>1,'show_in_menu'=>1),
            array('name'=>'MANAGEMENT','status'=>1,'show_in_menu'=>1),
            array('name'=>'RAILWAY','status'=>1,'show_in_menu'=>1),
        );
      DB::table('categories')->insert($categories);

        $course_validities = array(
            array('name'=>'life Time Access','status'=>1),
            array('name'=>'3 months','status'=>1),
            array('name'=>'6 months','status'=>1),
            array('name'=>'9 months','status'=>1),
            array('name'=>'1 Year','status'=>1),
            array('name'=>'2 Years','status'=>1),
            array('name'=>'3 Years','status'=>1),
            array('name'=>'4 Years','status'=>1),
            array('name'=>'5 Years','status'=>1),
        );
     DB::table('course_validities')->insert($course_validities);

      $video_sources = array(
            array('name'=>'Vimeo','status'=>1),
            array('name'=>'Youtube','status'=>1),
            array('name'=>'Own','status'=>1),
        );
     DB::table('video_sources')->insert($video_sources);

       $languages = array(
            array('name'=>'English','is_active'=>1),
            array('name'=>'Hindi','is_active'=>1),
        );
     DB::table('languages')->insert($languages);

     $certificate_generates = array(
            array('name'=>'Yes'),
            array('name'=>'No'),
        );
     DB::table('certificate_generates')->insert($certificate_generates);

      $statuses = array(
            array('text'=>'PUBLISHED'),
            array('text'=>'DRAFT'),
        );
     DB::table('statuses')->insert($statuses);

$resources_types = array(
            array('name'=>'File'),
            array('name'=>'Quiz'),
        );
     DB::table('resources_types')->insert($resources_types);



