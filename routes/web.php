<?php

use App\Http\Controllers\Admin\AddcourseController;
use App\Http\Controllers\Admin\AddcourseshowController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseshowController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MaincourseController;
use App\Http\Controllers\Guest\EmailController;
use App\Http\Controllers\Guest\GuestController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::prefix('admin')->group(function(){
    Route::get('/', [LoginController::class, 'Login'])->name('admin.login.loginpage');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard');
    Route::get('/register-form', [AdminController::class, 'Regform'])->name('admin.register-form');
    Route::get('/staff/register-form', [AdminController::class, 'Staffregform'])->name('admin.staff.register-form');
    Route::get('/student/register-form', [AdminController::class, 'Studentregform'])->name('admin.student.register-form');
});


Route::prefix('login')->group(function(){
    Route::post('/register', [LoginController::class, 'post_register'])->name('login.register');
    Route::post('/loginpage', [LoginController::class, 'post_login'])->name('admin.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.login.logout'); 
});
Route::prefix('register')->group(function(){
    Route::get('/', [LoginController::class, 'Register'])->name('admin.register');
    
});

Route::prefix('Maincourse')->group(function(){
    Route::get('/coursepage', [CourseController::class, 'Featurecourse'])->name('admin.course');
    Route::post('/create', [CourseController::class, 'Create'])->name('admin.course.create');
    Route::get('/editpage/{id}', [CourseController::class, 'Editpage'])->name('admin.course.Edit');
    Route::post('/update/{id}', [CourseController::class, 'Update'])->name('admin.course.update');
    Route::get('/delete/{id}', [CourseController::class, 'Delete'])->name('admin.course.delete');
});

Route::prefix('course')->group(function(){
    Route::get('/coursepage', [MaincourseController::class, 'Courses'])->name('admin.course.coursepage');
    Route::post('/create', [MaincourseController::class, 'Create'])->name('admin.category.create');
    Route::get('/editpage/{id}', [MaincourseController::class, 'Editpage'])->name('admin.category.Edit');
    Route::post('/update/{id}', [MaincourseController::class, 'Update'])->name('admin.category.update');
    Route::get('/delete/{id}', [MaincourseController::class, 'Delete'])->name('admin.category.delete'); 

    Route::get('/addcourse/{id}', [AddcourseController::class, 'Addcourse'])->name('admin.addcourse.course');
    Route::post('/createpage', [AddcourseController::class, 'Create'])->name('admin.addcourse.create');
    Route::get('/edit/{id}', [AddcourseController::class, 'Editpage'])->name('admin.addcourse.Edit');
    Route::post('/updatepage/{id}', [AddcourseController::class, 'Update'])->name('admin.addcourse.update');
    Route::get('/deletepage/{id}', [AddcourseController::class, 'Delete'])->name('admin.addcourse.delete'); 
   
});

Route::prefix('Certification')->group(function(){
    Route::get('/Certificationpage', [CertificationController::class, 'Certification'])->name('admin.Certification');
    Route::post('/create', [CertificationController::class, 'Create'])->name('admin.Certification.create');
    Route::get('/editpage/{id}', [CertificationController::class, 'Editpage'])->name('admin.Certification.Edit');
    Route::post('/update/{id}', [CertificationController::class, 'Update'])->name('admin.Certification.update');
    Route::get('/delete/{id}', [CertificationController::class, 'Delete'])->name('admin.Certification.delete');     
});

Route::prefix('Gallery')->group(function(){
    Route::get('/Gallerypage', [GalleryController::class, 'Gallery'])->name('admin.Gallery');     
    Route::post('/create', [GalleryController::class, 'Create'])->name('admin.Gallery.create');
    Route::get('/editpage/{id}', [GalleryController::class, 'Editpage'])->name('admin.Gallery.Edit');
    Route::post('/update/{id}', [GalleryController::class, 'Update'])->name('admin.Gallery.update'); 
    Route::get('/delete/{id}', [GalleryController::class, 'Delete'])->name('admin.Gallery.delete');

    Route::get('/Imagepage{id}', [ImageController::class, 'Image'])->name('admin.Image');  
    Route::post('/createimage', [ImageController::class, 'Create'])->name('admin.Image.create');
    Route::get('/deletepage/{id}', [ImageController::class, 'Delete'])->name('admin.Image.delete');
});

Route::prefix('Contact')->group(function(){
    Route::get('/coursepage', [ContactController::class, 'Contact'])->name('admin.Contact');
    Route::post('/create', [ContactController::class, 'Create'])->name('admin.Contact.create');
    Route::get('/editpage/{id}', [ContactController::class, 'Editpage'])->name('admin.Contact.Edit');
    Route::post('/update/{id}', [ContactController::class, 'Update'])->name('admin.Contact.update'); 
    Route::get('/delete/{id}', [ContactController::class, 'Delete'])->name('admin.Contact.delete');
});

Route::prefix('Announcement')->group(function(){
    Route::get('/Announcementpage', [AnnouncementController::class, 'Announcement'])->name('admin.Announcement');
    Route::post('/create', [AnnouncementController::class, 'Create'])->name('admin.Announcement.create');
    Route::get('/editpage/{id}', [AnnouncementController::class, 'Editpage'])->name('admin.Announcement.Edit');
    Route::post('/update/{id}', [AnnouncementController::class, 'Update'])->name('admin.Announcement.update');
    Route::get('/delete/{id}', [AnnouncementController::class, 'Delete'])->name('admin.Announcement.delete');
});


Route::get('/course-details/{id}', [CourseshowController::class, 'Show'])->name('course.Show');
/* Route::get('/Addcourseshow/{id}', [AddcourseshowController::class, 'Addcourseshow'])->name('Addcourseshow.Show'); */    
Route::post('/contactpage', [EmailController::class, 'sendContactMail'])->name('contact.send');

Route::get('/', [GuestController::class, 'Index'])->name('Index');
Route::get('/About', [GuestController::class, 'About'])->name('About'); 
Route::get('/Course', [GuestController::class, 'Course'])->name('Course');  
Route::get('/Gallery', [GuestController::class, 'Gallery'])->name('Gallery'); 
Route::get('/Certification', [GuestController::class, 'Certification'])->name('Certification'); 
Route::get('/Contact', [GuestController::class, 'Contact'])->name('Contact'); 
Route::get('/CourseDetails', [GuestController::class, 'CourseDetails'])->name('CourseDetails');