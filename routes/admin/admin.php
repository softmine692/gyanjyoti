<?php
// Home
Route::get('/home', 'HomeController@index')->name('home');

// Settings
Route::get('setting/list', 'Setting\SettingController@list')->name('setting.list');
Route::resource('setting', 'Setting\SettingController');

//BlogCategory
Route::name('blog.')->prefix('blog/')->group(function () {
    Route::get('category/list', 'Blog\BlogCategoryController@list')->name('type.list');
    Route::get('category/status/change/{id}', 'Blog\BlogCategoryController@changeStatus')->name('blog.status.change');
    Route::resource('category', 'Blog\BlogCategoryController');
});

// Blog
Route::get('blog/list', 'Blog\BlogController@list')->name('blog.list');
Route::get('blog/status/change/{id}', 'Blog\BlogController@changeStatus')->name('blog.status.change');
Route::resource('blog', 'Blog\BlogController');

// Course
Route::get('course/list', 'Course\CourseController@list')->name('blog.list');
Route::get('course/status/change/{id}', 'Course\CourseController@changeStatus')->name('blog.status.change');
Route::resource('course', 'Course\CourseController');

// About Us
Route::get('about/list', 'About\AboutController@list')->name('about.list');
Route::resource('about', 'About\AboutController');

// Contact
Route::get('contact/list', 'Contact\ContactController@list')->name('contact.list');
Route::resource('contact', 'Contact\ContactController');

// Teacher
Route::get('teacher/list', 'Teacher\TeacherController@list')->name('teacher.list');
Route::resource('teacher', 'Teacher\TeacherController');

// Notice
Route::get('notice/list', 'Notice\NoticeController@list')->name('notice.list');
Route::get('notice/status/change/{id}', 'Notice\NoticeController@changeStatus')->name('notice.status.change');
Route::resource('notice', 'Notice\NoticeController');

// banner
Route::get('banner/list', 'Banner\BannerController@list')->name('banner.list');
Route::get('banner/status/change/{id}', 'Banner\BannerController@changeStatus')->name('banner.status.change');
Route::resource('banner', 'Banner\BannerController');

// Message
Route::get('message/list', 'Message\MessageController@list')->name('message.list');
Route::resource('message', 'Message\MessageController');
