<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserRole;
use Faker\Generator as Faker;

$factory->define(UserRole::class, function (Faker $faker) {
    return [
        
        'roleName'=>'admin',
        'permission'=>'[{"schoolName":"Admin","menuList":[{"resourceName":"Home","read":true,"write":false,"update":false,"delete":false,"name":"/"},{"resourceName":"Tags","read":true,"write":false,"update":false,"delete":false,"name":"tags"},{"resourceName":"Category","read":true,"write":false,"update":false,"delete":false,"name":"category"},{"resourceName":"Blog","read":true,"write":false,"update":false,"delete":false,"name":"blog"},{"resourceName":"AdminUsers","read":true,"write":false,"update":false,"delete":false,"name":"adminuser"},{"resourceName":"Role","read":true,"write":false,"update":false,"delete":false,"name":"role"},{"resourceName":"Assign Role","read":true,"write":false,"update":false,"delete":false,"name":"assignRole"}]},{"schoolName":"从化第四中学","menuList":[{"resourceName":"学校空间","read":true,"write":false,"update":false,"delete":false,"name":"schoolSpace"},{"resourceName":"全体老师","read":true,"write":false,"update":false,"delete":false,"name":"allTeachers"},{"resourceName":"宿舍管理员","read":true,"write":false,"update":false,"delete":false,"name":"dormitory"},{"resourceName":"初二1班","read":true,"write":false,"update":false,"delete":false,"name":"middle21"},{"resourceName":"初二2班","read":true,"write":false,"update":false,"delete":false,"name":"middle22"},{"resourceName":"初二3班","read":true,"write":false,"update":false,"delete":false,"name":"middle23"},{"resourceName":"初二4班","read":true,"write":false,"update":false,"delete":false,"name":"middle24"},{"resourceName":"初二5班","read":true,"write":false,"update":false,"delete":false,"name":"middle25"},{"resourceName":"初二6班","read":true,"write":false,"update":false,"delete":false,"name":"middle26"},{"resourceName":"初三1班","read":true,"write":false,"update":false,"delete":false,"name":"middle31"},{"resourceName":"初三2班","read":true,"write":false,"update":false,"delete":false,"name":"middle32"},{"resourceName":"初三3班","read":true,"write":false,"update":false,"delete":false,"name":"middle33"},{"resourceName":"初三4班","read":true,"write":false,"update":false,"delete":false,"name":"middle34"},{"resourceName":"初三5班","read":true,"write":false,"update":false,"delete":false,"name":"middle35"},{"resourceName":"初三6班","read":true,"write":false,"update":false,"delete":false,"name":"middle36"},{"resourceName":"高二1班","read":true,"write":false,"update":false,"delete":false,"name":"high21"},{"resourceName":"高二2班","read":true,"write":false,"update":false,"delete":false,"name":"high22"},{"resourceName":"高二3班","read":true,"write":false,"update":false,"delete":false,"name":"high23"},{"resourceName":"高二4班","read":true,"write":false,"update":false,"delete":false,"name":"high24"},{"resourceName":"高二5班","read":true,"write":false,"update":false,"delete":false,"name":"high25"},{"resourceName":"高二6班","read":true,"write":false,"update":false,"delete":false,"name":"high26"},{"resourceName":"初三1班","read":true,"write":false,"update":false,"delete":false,"name":"high31"},{"resourceName":"初三2班","read":true,"write":false,"update":false,"delete":false,"name":"high32"},{"resourceName":"初三3班","read":true,"write":false,"update":false,"delete":false,"name":"high33"},{"resourceName":"初三4班","read":true,"write":false,"update":false,"delete":false,"name":"high34"},{"resourceName":"初三5班","read":true,"write":false,"update":false,"delete":false,"name":"high35"},{"resourceName":"初三6班","read":true,"write":false,"update":false,"delete":false,"name":"high36"}]},{"schoolName":"V校实验学校","menuList":[{"resourceName":"学校空间","read":true,"write":false,"update":false,"delete":false,"name":"vSchoolSpace"},{"resourceName":"全体老师","read":true,"write":false,"update":false,"delete":false,"name":"vAllTeacher"},{"resourceName":"安全教育课程空间","read":true,"write":false,"update":false,"delete":false,"name":"safetyEducationCourse"},{"resourceName":"八年级数学上册","read":true,"write":false,"update":false,"delete":false,"name":"eighthGradeMathematics"},{"resourceName":"初三年级数学","read":true,"write":false,"update":false,"delete":false,"name":"thirdGradeMathematics"},{"resourceName":"地理习题库","read":true,"write":false,"update":false,"delete":false,"name":"geographyExerciseBank"},{"resourceName":"论语","read":true,"write":false,"update":false,"delete":false,"name":"Analects"},{"resourceName":"数学","read":true,"write":false,"update":false,"delete":false,"name":"mathematics"},{"resourceName":"数学有理数","read":true,"write":false,"update":false,"delete":false,"name":"mathematicalRational"},{"resourceName":"五年级数学上册","read":true,"write":false,"update":false,"delete":false,"name":"fifthGradeMathematics"},{"resourceName":"大班大1班","read":true,"write":false,"update":false,"delete":false,"name":"bigClassBigClass1"},{"resourceName":"小1班","read":true,"write":false,"update":false,"delete":false,"name":"Class1"},{"resourceName":"周六培训空间","read":true,"write":false,"update":false,"delete":false,"name":"saturdayTrainingSpace"},{"resourceName":"三年2班","read":true,"write":false,"update":false,"delete":false,"name":"class2ForThreeYears"},{"resourceName":"三年3班","read":true,"write":false,"update":false,"delete":false,"name":"class3ForThreeYears"},{"resourceName":"九年九班","read":true,"write":false,"update":false,"delete":false,"name":"classNineOfNineYears"},{"resourceName":"初三1班","read":true,"write":false,"update":false,"delete":false,"name":"gradeThree"},{"resourceName":"初三2班","read":true,"write":false,"update":false,"delete":false,"name":"grade3Class2"},{"resourceName":"hi","read":true,"write":false,"update":false,"delete":false,"name":"hi"}]}]'
    ];
});
