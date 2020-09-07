# change-password-laravel
Change password controller and view

    **Route entry**

    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


In this controller method, We check the following things in order.
    1. Current password provided by user should match the password stored in the database. We check this by using Hash::check method.
    2. Current password and the new password should not be same.
    3. Validate the new password requirements, new password and confirm password should be same.

Once all of this pass through, we can go ahead and change the password for the user account and redirect him back with the success message.

