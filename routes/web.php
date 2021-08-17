<?php

// *****************************Frontend **************************


Route::namespace('Frontend')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
    //Give feed back and contact User side
    Route::get('contact', 'ContactFeedbackController@contact')->name('contact');
    Route::post('contact', 'ContactFeedbackController@submitContact')->name('submit.contact');
    Route::get('feedback', 'ContactFeedbackController@feedback')->name('feedback');
    Route::post('feedback', 'ContactFeedbackController@submitFeedback')->name('submit.feedback');
    // Route::get('privacy-policy', 'PageController@privacyPolicy')->name('privacy.policy');
    // Route::get('terms-and-conditions', 'PageController@termsAndConditions')->name('terms.and.conditions');
    Route::get('about', 'PageController@about')->name('about');
    Route::get('gallery', 'PageController@gallery')->name('gallery');
    Route::get('activities', 'PageController@activities')->name('activities');
    Route::get('activity/{slug}/{id}', 'PageController@activity')->name('activity');
    Route::get('blogs', 'PageController@blogs')->name('blogs');
    Route::get('blog/{slug}/{id}', 'PageController@blog')->name('blog');
    Route::get('events', 'PageController@events')->name('events');
    Route::get('upcoming-events', 'PageController@upcomingEvents')->name('upcomingEvents');
    Route::get('event/{slug}/{id}', 'PageController@event')->name('event');
    Route::get('alumnis', 'PageController@alumnis')->name('alumnis');
    Route::get('club-members', 'PageController@clubMembers')->name('clubMembers');
    Route::get('become-a-member', 'PageController@becomeAMemberView')->name('becomeAMember.view');
    Route::post('become-a-member', 'PageController@becomeAMember')->name('becomeAMember');
});

// Ckeditor Image Upload
Route::post('ckeditor/image-upload', 'Common\CKEditorController@imageUpload')->name('ckeditor.image.upload');
