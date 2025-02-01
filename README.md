# change-password-laravel
Change the password controller and view

   **_Route entry_**

    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

In the ChangePasswordController, things are checked in the following order.
1. Match the current password provided by the user with the password stored in the database. This is done using the Hash::check method.
2. The current and the new password should not be the same.
3. Validate the new password requirements, the new password and confirm password should be the same.

Once this is completed, the user account's password is updated, and the user is redirected back to the success message.

