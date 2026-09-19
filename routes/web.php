<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CDOEController;
use App\Http\Controllers\OtpController;




// Home
Route::get('/', [CDOEController::class, 'home'])->name('home');
Route::get('/programme', [CDOEController::class, 'programme'])->name('programme');
Route::get('/blog', [CDOEController::class, 'blog'])->name('blog');
Route::get('/blog-details', [CDOEController::class, 'blog_details'])->name('blog.details');
Route::get('/online-mba-hr', [CDOEController::class, 'hr_programme'])->name('hr.programme');
Route::get('/online-mba-finance', [CDOEController::class, 'finance_programme'])->name('finance.programme');
Route::get('/online-mba-international-business', [CDOEController::class, 'ib_programme'])->name('ib.programme');
Route::get('/online-mba-marketing', [CDOEController::class, 'marketing_programme'])->name('marketing.programme');
Route::permanentRedirect('/online-bba', '/programme');
Route::get('/online-bba-in-digital-marketing', [CDOEController::class, 'bba_digital_marketing_programme'])->name('bba_digital_marketing.programme');
Route::get('/online-bba-in-banking-fintech-ai', [CDOEController::class, 'bba_banking_fintech_ai_programme'])->name('bba_banking_fintech_ai.programme');
Route::get('/online-bba-in-healthcare-services-and-administration', [CDOEController::class, 'bba_healthcare_administration_programme'])->name('bba_healthcare_administration.programme');
Route::get('/online-bba-in-international-business-and-entrepreneurship', [CDOEController::class, 'bba_ib_entrepreneurship_programme'])->name('bba_ib_entrepreneurship.programme');
Route::permanentRedirect('/online-bca', '/programme');
Route::get('/online-bca-cloud-computing-devops', [CDOEController::class, 'bca_cloud_devops_programme'])->name('bca_cloud_devops.programme');
Route::get('/online-bca-healthcare-it-bioinformatics', [CDOEController::class, 'bca_healthcare_bioinformatics_programme'])->name('bca_healthcare_bioinformatics.programme');
Route::get('/online-bca-ai-data-science', [CDOEController::class, 'bca_ai_data_science_programme'])->name('bca_ai_data_science.programme');
Route::get('/online-bca-cyber-security-ethical-hacking', [CDOEController::class, 'bca_cyber_security_ethical_hacking_programme'])->name('bca_cyber_security_ethical_hacking.programme');
Route::get('/online-bca-game-design-ar-vr', [CDOEController::class, 'bca_game_design_ar_vr_programme'])->name('bca_game_design_ar_vr.programme');
Route::get('/online-bca-fintech-blockchain', [CDOEController::class, 'bca_fintech_blockchain_programme'])->name('bca_fintech_blockchain.programme');
Route::get('/online-mba-digital-marketing', [CDOEController::class, 'digital_marketing_programme'])->name('digital_marketing.programme');
Route::get('/online-mba-logistics-and-supply-chain-management', [CDOEController::class, 'lscm_programme'])->name('lscm.programme');
Route::get('/online-mba-in-agri-business', [CDOEController::class, 'agri_business_programme'])->name('agri_business.programme');
Route::get('/online-mba-data-analytics', [CDOEController::class, 'data_analytics_programme'])->name('data_analytics.programme');
Route::get('/online-mba-hospital-and-healthcare-management', [CDOEController::class, 'hospital_healthcare_programme'])->name('hospital_healthcare.programme');
Route::get('/online-mba-operations-strategy-and-project-management', [CDOEController::class, 'operations_strategy_programme'])->name('operations_strategy.programme');
Route::get('/online-mba-in-banking-fintech-ai', [CDOEController::class, 'banking_fintech_ai_programme'])->name('banking_fintech_ai.programme');
Route::get('/mandatory-disclosure', [CDOEController::class, 'mandatory_disclosure'])->name('mandatory.disclosure');
Route::get('/admissions-rules', [CDOEController::class, 'admissions_rules'])->name('admissions.rules');
Route::get('/how-to-apply', [CDOEController::class, 'how_to_apply'])->name('how.to.apply');
Route::get('/facilities', [CDOEController::class, 'facilities'])->name('facilities');
Route::get('/contact-us', [CDOEController::class, 'contact'])->name('contact');
Route::post('/contact-us', [CDOEController::class, 'storeContact'])->name('contact.store');
Route::get('/blog/{slug}', [CDOEController::class, 'showBlog'])->name('show.blog');

// OTP API Routes
Route::prefix('api/otp')->group(function () {
    Route::post('/send', [OtpController::class, 'sendOtp'])->name('otp.send');
    Route::post('/verify', [OtpController::class, 'verifyOtp'])->name('otp.verify');
    Route::get('/test-sms', [OtpController::class, 'testConnectivity']); // Diagnostic route
});


