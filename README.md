# change-password-laravel
Change password controller and view

   **_Route entry_**

    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

In the ChangePasswordController, things are check in the following order.
    1. Match current password provided by user with the password stored in the database. It is checked by using Hash::check method.
    2. Current and the new password should not be same.
    3. Validate the new password requirements, new password and confirm password should be same.

Once all of this pass through, the password for the user account updated and user redirect back with the success message.

