<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;
use App\Http\Controllers\Backend\Setup\FeeCategoryController;
use App\Http\Controllers\Backend\Setup\FeeAmountControllere;
use App\Http\Controllers\Backend\Setup\ServiceController;
use App\Http\Controllers\Backend\Setup\ServiceAmountController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\SchoolSubjectController;
use App\Http\Controllers\Backend\Setup\AssignSubjectController;
use App\Http\Controllers\Backend\Setup\DesignationController;
use App\Http\Controllers\Backend\Setup\ItemCategoryController;
use App\Http\Controllers\Backend\Setup\ItemSubCategoryController;
use App\Http\Controllers\Backend\Setup\ItemController;
use App\Http\Controllers\Backend\Setup\DepartmentController;
use App\Http\Controllers\Backend\Setup\SectionController;
use App\Http\Controllers\Backend\Setup\UnitController;
use App\Http\Controllers\Backend\Setup\CurrencyController;

use App\Http\Controllers\Backend\Student\StudentRegController;
use App\Http\Controllers\Backend\Student\StudentRollController;
use App\Http\Controllers\Backend\Student\RegistrationFeeController;
use App\Http\Controllers\Backend\Student\MonthlyFeeController;
use App\Http\Controllers\Backend\Student\ExamFeeController;
use App\Http\Controllers\Backend\Student\StudentServiceController;
use App\Http\Controllers\Backend\Student\StudentDetailController;


use App\Http\Controllers\Backend\Employee\EmployeeRegController;
use App\Http\Controllers\Backend\Employee\EmployeeSalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeLeaveController;
use App\Http\Controllers\Backend\Employee\EmployeeAttendanceController;
use App\Http\Controllers\Backend\Employee\MonthlySalaryController;

use App\Http\Controllers\Backend\Marks\MarksController;
use App\Http\Controllers\Backend\Marks\GradeController;

use App\Http\Controllers\Backend\DefaultController;

use App\Http\Controllers\Backend\Account\StudentFeeController;
use App\Http\Controllers\Backend\Account\AccountSalaryController;
use App\Http\Controllers\Backend\Account\OtherCostController;

use App\Http\Controllers\Backend\Report\ProfiteController;
use App\Http\Controllers\Backend\Report\MarkSheetController;
use App\Http\Controllers\Backend\Report\AttenReportController;
use App\Http\Controllers\Backend\Report\ResultReportController;
//master Data Controller
use App\Http\Controllers\Backend\Setup\AppMasterDataController;
use App\Http\Controllers\Backend\Setup\InstitutionInfoController;
//EduInsDtlsController
use App\Http\Controllers\Backend\Employee\EduInsDtlsController;
use App\Http\Controllers\Backend\Employee\EmpOffInfoController;
//StdAttendanceController
use App\Http\Controllers\Backend\Student\StdAttendanceController;

use App\Http\Controllers\Backend\Setup\ExpenseCategoryController;
use App\Http\Controllers\Backend\Account\AssetController;

use App\Http\Controllers\Backend\Inventory\RequisitionController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'prevent-back-history'], function () {




    Route::get('/', function () {
        return view('auth.login');
    });

    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');


    Route::group(['middleware' => 'auth'], function () {
        // User Management All Routes
        Route::prefix('users')->group(function () {
            Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
            Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');
            Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
            Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
            Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
            Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
        });

        /// User Profile and Change Password
        Route::prefix('profile')->group(function () {
            Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
            Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
            Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
            Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
            Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
        });



        /// User Profile and Change Password
        Route::prefix('setups')->group(function () {
            // Student Class Routes
            Route::get('student/class/view', [StudentClassController::class, 'ViewStudent'])->name('student.class.view');
            Route::get('student/class/add', [StudentClassController::class, 'StudentClassAdd'])->name('student.class.add');
            Route::post('student/class/store', [StudentClassController::class, 'StudentClassStore'])->name('store.student.class');
            Route::get('student/class/edit/{id}', [StudentClassController::class, 'StudentClassEdit'])->name('student.class.edit');
            Route::post('student/class/update/{id}', [StudentClassController::class, 'StudentClassUpdate'])->name('update.student.class');
            Route::get('student/class/delete/{id}', [StudentClassController::class, 'StudentClassDelete'])->name('student.class.delete');
            // Student Year Routes
            Route::get('student/year/view', [StudentYearController::class, 'ViewYear'])->name('student.year.view');
            Route::get('student/year/add', [StudentYearController::class, 'StudentYearAdd'])->name('student.year.add');
            Route::post('student/year/store', [StudentYearController::class, 'StudentYearStore'])->name('store.student.year');
            Route::get('student/year/edit/{id}', [StudentYearController::class, 'StudentYearEdit'])->name('student.year.edit');
            Route::post('student/year/update/{id}', [StudentYearController::class, 'StudentYearUpdate'])->name('update.student.year');
            Route::get('student/year/delete/{id}', [StudentYearController::class, 'StudentYearDelete'])->name('student.year.delete');
            // Student Group Routes
            Route::get('student/group/view', [StudentGroupController::class, 'ViewGroup'])->name('student.group.view');
            Route::get('student/group/add', [StudentGroupController::class, 'StudentGroupAdd'])->name('student.group.add');
            Route::post('student/group/store', [StudentGroupController::class, 'StudentGroupStore'])->name('store.student.group');
            Route::get('student/group/edit/{id}', [StudentGroupController::class, 'StudentGroupEdit'])->name('student.group.edit');
            Route::post('student/group/update/{id}', [StudentGroupController::class, 'StudentGroupUpdate'])->name('update.student.group');
            Route::get('student/group/delete/{id}', [StudentGroupController::class, 'StudentGroupDelete'])->name('student.group.delete');
            // Student Shift Routes
            Route::get('student/shift/view', [StudentShiftController::class, 'ViewShift'])->name('student.shift.view');
            Route::get('student/shift/add', [StudentShiftController::class, 'StudentShiftAdd'])->name('student.shift.add');
            Route::post('student/shift/store', [StudentShiftController::class, 'StudentShiftStore'])->name('store.student.shift');
            Route::get('student/shift/edit/{id}', [StudentShiftController::class, 'StudentShiftEdit'])->name('student.shift.edit');
            Route::post('student/shift/update/{id}', [StudentShiftController::class, 'StudentShiftUpdate'])->name('update.student.shift');
            Route::get('student/shift/delete/{id}', [StudentShiftController::class, 'StudentShiftDelete'])->name('student.shift.delete');
            // Fee Category Routes
            Route::get('fee/category/view', [FeeCategoryController::class, 'ViewFeeCat'])->name('fee.category.view');
            Route::get('fee/category/add', [FeeCategoryController::class, 'FeeCatAdd'])->name('fee.category.add');
            Route::post('fee/category/store', [FeeCategoryController::class, 'FeeCatStore'])->name('store.fee.category');
            Route::get('fee/category/edit/{id}', [FeeCategoryController::class, 'FeeCatEdit'])->name('fee.category.edit');
            Route::post('fee/category/update/{id}', [FeeCategoryController::class, 'FeeCategoryUpdate'])->name('update.fee.category');
            Route::get('fee/category/delete/{id}', [FeeCategoryController::class, 'FeeCategoryDelete'])->name('fee.category.delete');
            // Fee Category Amount Routes
            Route::get('fee/amount/view', [FeeAmountControllere::class, 'ViewFeeAmount'])->name('fee.amount.view');
            Route::get('fee/amount/add', [FeeAmountControllere::class, 'AddFeeAmount'])->name('fee.amount.add');
            Route::post('fee/amount/store', [FeeAmountControllere::class, 'StoreFeeAmount'])->name('store.fee.amount');
            Route::get('fee/amount/edit/{fee_category_id}', [FeeAmountControllere::class, 'EditFeeAmount'])->name('fee.amount.edit');
            Route::post('fee/amount/update/{fee_category_id}', [FeeAmountControllere::class, 'UpdateFeeAmount'])->name('update.fee.amount');
            Route::get('fee/amount/details/{fee_category_id}', [FeeAmountControllere::class, 'DetailsFeeAmount'])->name('fee.amount.details');
             // Service Routes
             Route::get('service/view', [ServiceController::class, 'ViewService'])->name('service.view');
             Route::get('service/add', [ServiceController::class, 'ServiceAdd'])->name('service.add');
             Route::post('service/store', [ServiceController::class, 'ServiceStore'])->name('store.service');
             Route::get('service/edit/{id}', [ServiceController::class, 'ServiceEdit'])->name('service.edit');
             Route::post('service/update/{id}', [ServiceController::class, 'ServiceUpdate'])->name('update.service');
             Route::get('service/delete/{id}', [ServiceController::class, 'ServiceDelete'])->name('service.delete');
             // Service Amount Routes
             Route::get('service/amount/view', [ServiceAmountController::class, 'ViewServiceAmount'])->name('service.amount.view');
             Route::get('service/amount/add', [ServiceAmountController::class, 'AddServiceAmount'])->name('service.amount.add');
             Route::post('service/amount/store', [ServiceAmountController::class, 'StoreServiceAmount'])->name('store.service.amount');
             Route::get('service/amount/edit/{service_id}', [ServiceAmountController::class, 'EditServiceAmount'])->name('service.amount.edit');
             Route::post('service/amount/update/{service_id}', [ServiceAmountController::class, 'UpdateServiceAmount'])->name('update.service.amount');
             Route::get('service/amount/details/{service_id}', [ServiceAmountController::class, 'DetailsServiceAmount'])->name('service.amount.details');
             // Department Routes
             Route::get('department/view', [DepartmentController::class, 'ViewDepartment'])->name('department.view');
             Route::get('department/add', [DepartmentController::class, 'DepartmentAdd'])->name('department.add');
             Route::post('department/store', [DepartmentController::class, 'DepartmentStore'])->name('store.department');
             Route::get('department/edit/{id}', [DepartmentController::class, 'DepartmentEdit'])->name('department.edit');
             Route::post('department/update/{id}', [DepartmentController::class, 'DepartmentUpdate'])->name('update.department');
             Route::get('department/delete/{id}', [DepartmentController::class, 'DepartmentDelete'])->name('department.delete');
             // Section Routes
             Route::get('section/view', [SectionController::class, 'ViewSection'])->name('section.view');
             Route::get('section/add', [SectionController::class, 'SectionAdd'])->name('section.add');
             Route::post('section/store', [SectionController::class, 'SectionStore'])->name('store.section');
             Route::get('section/edit/{id}', [SectionController::class, 'SectionEdit'])->name('section.edit');
             Route::post('section/update/{id}', [SectionController::class, 'SectionUpdate'])->name('update.section');
             Route::get('ection/delete/{id}', [SectionController::class, 'SectionDelete'])->name('section.delete');
            // Exam Type Routes
            Route::get('exam/type/view', [ExamTypeController::class, 'ViewExamType'])->name('exam.type.view');
            Route::get('exam/type/add', [ExamTypeController::class, 'ExamTypeAdd'])->name('exam.type.add');
            Route::post('exam/type/store', [ExamTypeController::class, 'ExamTypeStore'])->name('store.exam.type');
            Route::get('exam/type/edit/{id}', [ExamTypeController::class, 'ExamTypeEdit'])->name('exam.type.edit');
            Route::post('exam/type/update/{id}', [ExamTypeController::class, 'ExamTypeUpdate'])->name('update.exam.type');
            Route::get('exam/type/delete/{id}', [ExamTypeController::class, 'ExamTypeDelete'])->name('exam.type.delete');
            // School Subject All Routes
            Route::get('school/subject/view', [SchoolSubjectController::class, 'ViewSubject'])->name('school.subject.view');
            Route::get('school/subject/add', [SchoolSubjectController::class, 'SubjectAdd'])->name('school.subject.add');
            Route::post('school/subject/store', [SchoolSubjectController::class, 'SubjectStore'])->name('store.school.subject');
            Route::get('school/subject/edit/{id}', [SchoolSubjectController::class, 'SubjectEdit'])->name('school.subject.edit');
            Route::post('school/subject/update/{id}', [SchoolSubjectController::class, 'SubjectUpdate'])->name('update.school.subject');
            Route::get('school/subject/delete/{id}', [SchoolSubjectController::class, 'SubjectDelete'])->name('school.subject.delete');
            // Assign Subject Routes
            Route::get('assign/subject/view', [AssignSubjectController::class, 'ViewAssignSubject'])->name('assign.subject.view');
            Route::get('assign/subject/add', [AssignSubjectController::class, 'AddAssignSubject'])->name('assign.subject.add');
            Route::post('assign/subject/store', [AssignSubjectController::class, 'StoreAssignSubject'])->name('store.assign.subject');
            Route::get('assign/subject/edit/{class_id}', [AssignSubjectController::class, 'EditAssignSubject'])->name('assign.subject.edit');
            Route::post('assign/subject/update/{class_id}', [AssignSubjectController::class, 'UpdateAssignSubject'])->name('update.assign.subject');
            Route::get('assign/subject/details/{class_id}', [AssignSubjectController::class, 'DetailsAssignSubject'])->name('assign.subject.details');
            // Designation All Routes
            Route::get('designation/view', [DesignationController::class, 'ViewDesignation'])->name('designation.view');
            Route::get('designation/add', [DesignationController::class, 'DesignationAdd'])->name('designation.add');
            Route::post('designation/store', [DesignationController::class, 'DesignationStore'])->name('store.designation');
            Route::get('designation/edit/{id}', [DesignationController::class, 'DesignationEdit'])->name('designation.edit');
            Route::post('designation/update/{id}', [DesignationController::class, 'DesignationUpdate'])->name('update.designation');
            Route::get('designation/delete/{id}', [DesignationController::class, 'DesignationDelete'])->name('designation.delete');
            // Expenses Category Routes
            Route::get('expense/category/view', [ExpenseCategoryController::class, 'ViewExpenseCat'])->name('expense.category.view');
            Route::get('expense/category/add', [ExpenseCategoryController::class, 'ExpenseCatAdd'])->name('expense.category.add');
            Route::post('expense/category/store', [ExpenseCategoryController::class, 'ExpenseCatStore'])->name('store.expense.category');
            Route::get('expense/category/edit/{id}', [ExpenseCategoryController::class, 'ExpenseCatEdit'])->name('expense.category.edit');
            Route::post('expense/category/update/{id}', [ExpenseCategoryController::class, 'ExpenseCategoryUpdate'])->name('update.expense.category');
            Route::get('expense/category/delete/{id}', [ExpenseCategoryController::class, 'ExpenseCategoryDelete'])->name('expense.category.delete');
            // Item Category Routes
            Route::get('item/category/view', [ItemCategoryController::class, 'ViewItemCategory'])->name('item.category.view');
            Route::get('item/category/add', [ItemCategoryController::class, 'ItemCategoryAdd'])->name('item.category.add');
            Route::post('item/category/store', [ItemCategoryController::class, 'ItemCategoryStore'])->name('store.item.category');
            Route::get('item/category/edit/{id}', [ItemCategoryController::class, 'ItemCategoryEdit'])->name('item.category.edit');
            Route::post('item/category/update/{id}', [ItemCategoryController::class, 'ItemCategoryUpdate'])->name('update.item.category');
            Route::get('item/category/delete/{id}', [ItemCategoryController::class, 'ItemCategoryDelete'])->name('item.category.delete');
            // Item Sub Category Routes
            Route::get('item/subcategory/view', [ItemSubCategoryController::class, 'ViewItemSubCategory'])->name('item.subcategory.view');
            Route::get('item/subcategory/add', [ItemSubCategoryController::class, 'ItemSubCategoryAdd'])->name('item.subcategory.add');
            Route::post('item/subcategory/store', [ItemSubCategoryController::class, 'ItemSubCategoryStore'])->name('store.item.subcategory');
            Route::get('item/subcategory/edit/{id}', [ItemSubCategoryController::class, 'ItemSubCategoryEdit'])->name('item.subcategory.edit');
            Route::post('item/subcategory/update/{id}', [ItemSubCategoryController::class, 'ItemSubCategoryUpdate'])->name('update.item.subcategory');
            Route::get('item/subcategory/delete/{id}', [ItemSubCategoryController::class, 'ItemSubCategoryDelete'])->name('item.subcategory.delete');
            // Item  Routes
            Route::get('item/view', [ItemController::class,'ViewItem'])->name('item.view');
            Route::get('item/add', [ItemController::class,'ItemAdd'])->name('item.add');
            Route::post('item/store', [ItemController::class,'ItemStore'])->name('store.item');
            // Route::get('item/edit/{id}', [ItemController::class,'ItemEdit'])->name('item.edit');
            // Route::post('item/update/{id}', [ItemController::class,'ItemUpdate'])->name('update.item');
            Route::get('item/delete/{id}', [ItemController::class,'ItemDelete'])->name('item.delete');

             // Unit  Routes
             Route::get('unit/view', [UnitController::class,'index'])->name('unit.view');
             Route::get('unit/add', [UnitController::class,'create'])->name('unit.add');
             Route::post('unit/store', [UnitController::class,'store'])->name('store.unit');
             Route::get('unit/edit/{id}', [UnitController::class,'edit'])->name('unit.edit');
             Route::post('unit/update/{id}', [UnitController::class,'update'])->name('update.unit');
             Route::get('unit/delete/{id}', [UnitController::class,'destroy'])->name('unit.delete');
             // Currency  Routes
             Route::get('currency/view', [CurrencyController::class,'index'])->name('currency.view');
             Route::get('currency/add', [CurrencyController::class,'create'])->name('currency.add');
             Route::post('currency/store', [CurrencyController::class,'store'])->name('store.currency');
             Route::get('currency/edit/{id}', [CurrencyController::class,'edit'])->name('currency.edit');
             Route::post('currency/update/{id}', [CurrencyController::class,'update'])->name('update.currency');
             Route::get('currency/delete/{id}', [CurrencyController::class,'destroy'])->name('currency.delete');

        });
        /// Student Registration Routes
        Route::prefix('students')->group(function () {
            Route::get('/reg/view', [StudentRegController::class, 'StudentRegView'])->name('student.registration.view');
            Route::get('/reg/Add', [StudentRegController::class, 'StudentRegAdd'])->name('student.registration.add');
            Route::post('/reg/store', [StudentRegController::class, 'StudentRegStore'])->name('store.student.registration');
            Route::get('/reg/service/add/{id}', [StudentServiceController::class, 'StudentServView'])->name('student.service.view');
            Route::post('/reg/service/store', [StudentServiceController::class, 'StudentServStore'])->name('student.service.store');
            Route::get('/reg/detail/add/{id}', [StudentDetailController::class, 'StudentDetailAdd'])->name('student.detail.add');
            Route::post('/reg/detail/store/', [StudentDetailController::class, 'StudentDetailStore'])->name('student.detail.store');

            Route::get('/year/class/wise', [StudentRegController::class, 'StudentClassYearWise'])->name('student.year.class.wise');
            Route::get('/reg/edit/{student_id}', [StudentRegController::class, 'StudentRegEdit'])->name('student.registration.edit');
            Route::post('/reg/update/{student_id}', [StudentRegController::class, 'StudentRegUpdate'])->name('update.student.registration');
            Route::get('/reg/promotion/{student_id}', [StudentRegController::class, 'StudentRegPromotion'])->name('student.registration.promotion');
            Route::post('/reg/update/promotion/{student_id}', [StudentRegController::class, 'StudentUpdatePromotion'])->name('promotion.student.registration');
            Route::get('/reg/details/{student_id}', [StudentRegController::class, 'StudentRegDetails'])->name('student.registration.details');
            // Student Roll Generate Routes
            Route::get('/roll/generate/view', [StudentRollController::class, 'StudentRollView'])->name('roll.generate.view');
            Route::get('/reg/getstudents', [StudentRollController::class, 'GetStudents'])->name('student.registration.getstudents');
            Route::post('/roll/generate/store', [StudentRollController::class, 'StudentRollStore'])->name('roll.generate.store');
            // Registration Fee Routes
            Route::get('/reg/fee/view', [RegistrationFeeController::class, 'RegFeeView'])->name('registration.fee.view');
            Route::get('/reg/fee/classwisedata', [RegistrationFeeController::class, 'RegFeeClassData'])->name('student.registration.fee.classwise.get');
            Route::get('/reg/fee/payslip', [RegistrationFeeController::class, 'RegFeePayslip'])->name('student.registration.fee.payslip');
            // Monthly Fee Routes
            Route::get('/monthly/fee/view', [MonthlyFeeController::class, 'MonthlyFeeView'])->name('monthly.fee.view');
            Route::get('/monthly/fee/classwisedata', [MonthlyFeeController::class, 'MonthlyFeeClassData'])->name('student.monthly.fee.classwise.get');
            Route::get('/monthly/fee/payslip', [MonthlyFeeController::class, 'MonthlyFeePayslip'])->name('student.monthly.fee.payslip');
            // Exam Fee Routes
            Route::get('/exam/fee/view', [ExamFeeController::class, 'ExamFeeView'])->name('exam.fee.view');
            Route::get('/exam/fee/classwisedata', [ExamFeeController::class, 'ExamFeeClassData'])->name('student.exam.fee.classwise.get');
            Route::get('/exam/fee/payslip', [ExamFeeController::class, 'ExamFeePayslip'])->name('student.exam.fee.payslip');
            //Std daily attendance routes
            Route::get('/std/attendance/view', [StdAttendanceController::class, 'StdAttendanceView'])->name('student.daily.att.view');
            Route::post('/std/attendance/add', [StdAttendanceController::class, 'StdAttendanceAdd'])->name('student.daily.att.add');
            Route::post('/std/attendance/store', [StdAttendanceController::class, 'StdAttendanceStore'])->name('store.student.daily.attendance');
            Route::post('/std/attendance/data/load', [StdAttendanceController::class, 'StudentYeraClassShiftGroupWise'])->name('liststudent.year.class.shift.group.att');
        });
        /// Employee Registration Routes
        Route::prefix('employees')->group(function () {
            Route::get('reg/employee/view', [EmployeeRegController::class, 'EmployeeView'])->name('employee.registration.view');
            Route::get('reg/employee/add', [EmployeeRegController::class, 'EmployeeAdd'])->name('employee.registration.add');
            Route::post('reg/employee/store', [EmployeeRegController::class, 'EmployeeStore'])->name('store.employee.registration');
            Route::get('reg/employee/edit/{id}', [EmployeeRegController::class, 'EmployeeEdit'])->name('employee.registration.edit');
            Route::post('reg/employee/update/{id}', [EmployeeRegController::class, 'EmployeeUpdate'])->name('update.employee.registration');
            Route::get('reg/employee/details/{id}', [EmployeeRegController::class, 'EmployeeDetails'])->name('employee.registration.details');
            //employee education details
            Route::get('reg/employee/education/view', [EduInsDtlsController::class, 'EmployeeEducationView'])->name('employee.education.view');
            // add education details
            Route::get('reg/employee/education/add/{id}', [EduInsDtlsController::class, 'EmployeeEducationAdd'])->name('employee.education.add');
            // store education details
            Route::post('reg/employee/education/store', [EduInsDtlsController::class, 'EmployeeEducationStore'])->name('store.employee.education');
            //employee office details
            Route::get('reg/employee/office/add/{id}', [EmpOffInfoController::class, 'EmployeeOfficeAdd'])->name('employee.officeinfo.add');
            // store office details
            Route::post('reg/employee/office/store', [EmpOffInfoController::class, 'EmployeeOfficeStore'])->name('store.employee.officeinfo');
            // Employee Salary All Routes
            Route::get('salary/employee/view', [EmployeeSalaryController::class, 'SalaryView'])->name('employee.salary.view');
            Route::get('salary/employee/increment/{id}', [EmployeeSalaryController::class, 'SalaryIncrement'])->name('employee.salary.increment');
            Route::post('salary/employee/store/{id}', [EmployeeSalaryController::class, 'SalaryStore'])->name('update.increment.store');
            Route::get('salary/employee/details/{id}', [EmployeeSalaryController::class, 'SalaryDetails'])->name('employee.salary.details');
            // Employee Leave All Routes
            Route::get('leave/employee/view', [EmployeeLeaveController::class, 'LeaveView'])->name('employee.leave.view');
            Route::get('leave/employee/add', [EmployeeLeaveController::class, 'LeaveAdd'])->name('employee.leave.add');
            Route::post('leave/employee/store', [EmployeeLeaveController::class, 'LeaveStore'])->name('store.employee.leave');
            Route::get('leave/employee/edit/{id}', [EmployeeLeaveController::class, 'LeaveEdit'])->name('employee.leave.edit');
            Route::post('leave/employee/update/{id}', [EmployeeLeaveController::class, 'LeaveUpdate'])->name('update.employee.leave');
            Route::get('leave/employee/delete/{id}', [EmployeeLeaveController::class, 'LeaveDelete'])->name('employee.leave.delete');
            // Employee Attendance All Routes
            Route::get('attendance/employee/view', [EmployeeAttendanceController::class, 'AttendanceView'])->name('employee.attendance.view');
            Route::get('attendance/employee/add', [EmployeeAttendanceController::class, 'AttendanceAdd'])->name('employee.attendance.add');
            Route::post('attendance/employee/store', [EmployeeAttendanceController::class, 'AttendanceStore'])->name('store.employee.attendance');
            Route::get('attendance/employee/edit/{date}', [EmployeeAttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');
            Route::get('attendance/employee/details/{date}', [EmployeeAttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');
            Route::get('attendance/employee/attde/{id}', [EmployeeAttendanceController::class, 'AttendanceDtt']);
            // Employee Monthly Salary All Routes
            Route::get('monthly/salary/view', [MonthlySalaryController::class, 'MonthlySalaryView'])->name('employee.monthly.salary');
            Route::get('monthly/salary/get', [MonthlySalaryController::class, 'MonthlySalaryGet'])->name('employee.monthly.salary.get');
            Route::get('monthly/salary/payslip/{employee_id}', [MonthlySalaryController::class, 'MonthlySalaryPayslip'])->name('employee.monthly.salary.payslip');
        });
        /// Marks Management Routes
        Route::prefix('marks')->group(function () {
            Route::get('marks/entry/add', [MarksController::class, 'MarksAdd'])->name('marks.entry.add');
            Route::post('marks/entry/store', [MarksController::class, 'MarksStore'])->name('marks.entry.store');
            Route::get('marks/entry/edit', [MarksController::class, 'MarksEdit'])->name('marks.entry.edit');
            Route::get('marks/getstudents/edit', [MarksController::class, 'MarksEditGetStudents'])->name('student.edit.getstudents');
            Route::post('marks/entry/update', [MarksController::class, 'MarksUpdate'])->name('marks.entry.update');
            // Marks Entry Grade
            Route::get('marks/grade/view', [GradeController::class, 'MarksGradeView'])->name('marks.entry.grade');
            Route::get('marks/grade/add', [GradeController::class, 'MarksGradeAdd'])->name('marks.grade.add');
            Route::post('marks/grade/store', [GradeController::class, 'MarksGradeStore'])->name('store.marks.grade');
            Route::get('marks/grade/edit/{id}', [GradeController::class, 'MarksGradeEdit'])->name('marks.grade.edit');
            Route::post('marks/grade/update/{id}', [GradeController::class, 'MarksGradeUpdate'])->name('update.marks.grade');
        });
        Route::get('marks/getsubject', [DefaultController::class, 'GetSubject'])->name('marks.getsubject');
        Route::get('student/marks/getstudents', [DefaultController::class, 'GetStudents'])->name('student.marks.getstudents');
        /// Account Management Routes
        Route::prefix('accounts')->group(function () {
            Route::get('student/fee/view', [StudentFeeController::class, 'StudentFeeView'])->name('student.fee.view');
            Route::get('student/fee/add', [StudentFeeController::class, 'StudentFeeAdd'])->name('student.fee.add');
            Route::get('student/fee/getstudent', [StudentFeeController::class, 'StudentFeeGetStudent'])->name('account.fee.getstudent');
            Route::post('student/fee/store', [StudentFeeController::class, 'StudentFeeStore'])->name('account.fee.store');
            // Employee Salary Routes
            Route::get('account/salary/view', [AccountSalaryController::class, 'AccountSalaryView'])->name('account.salary.view');
            Route::get('account/salary/add', [AccountSalaryController::class, 'AccountSalaryAdd'])->name('account.salary.add');
            Route::get('account/salary/getemployee', [AccountSalaryController::class, 'AccountSalaryGetEmployee'])->name('account.salary.getemployee');
            Route::post('account/salary/store', [AccountSalaryController::class, 'AccountSalaryStore'])->name('account.salary.store');
            // Other Cost Rotues
            Route::get('other/cost/view', [OtherCostController::class, 'OtherCostView'])->name('other.cost.view');
            Route::get('other/cost/add', [OtherCostController::class, 'OtherCostAdd'])->name('other.cost.add');
            Route::post('other/cost/store', [OtherCostController::class, 'OtherCostStore'])->name('store.other.cost');
            Route::get('other/cost/edit/{id}', [OtherCostController::class, 'OtherCostEdit'])->name('edit.other.cost');
            Route::post('other/cost/update/{id}', [OtherCostController::class, 'OtherCostUpdate'])->name('update.other.cost');
            // Expense Assets Routes
            Route::get('expense/assets/view', [AssetController::class, 'ViewAsset'])->name('expense.assets.view');
            Route::get('expense/assets/add', [AssetController::class, 'AssetAdd'])->name('expense.assets.add');
            Route::post('expense/assets/store', [AssetController::class, 'AssetStore'])->name('store.expense.assets');
            Route::get('expense/assets/edit/{id}', [AssetController::class, 'AssetEdit'])->name('edit.expense.assets');
            Route::post('expense/assets/update/{id}', [AssetController::class, 'AssetUpdate'])->name('update.expense.assets');


        });
        /// Account Management Routes
        Route::prefix('inventory')->group(function () {
        // Other Cost Rotues
            Route::get('requsition/view', [RequisitionController::class, 'index'])->name('requisition.view');
            Route::get('requsition/add', [RequisitionController::class, 'create'])->name('requisition.add');
            Route::post('requsition/store', [RequisitionController::class, 'store'])->name('store.requisition');
            // Route::get('requsition/edit/{id}', [OtherCostController::class, 'edit'])->name('edit.requisition');
            // Route::post('requsition/update/{id}', [OtherCostController::class, 'update'])->name('update.requisition');


        });
        /// Report Management All Routes
        Route::prefix('reports')->group(function () {
            Route::get('monthly/profit/view', [ProfiteController::class, 'MonthlyProfitView'])->name('monthly.profit.view');
            Route::get('monthly/profit/datewais', [ProfiteController::class, 'MonthlyProfitDatewais'])->name('report.profit.datewais.get');
            Route::get('monthly/profit/pdf', [ProfiteController::class, 'MonthlyProfitPdf'])->name('report.profit.pdf');
            // MarkSheet Generate Routes
            Route::get('marksheet/generate/view', [MarkSheetController::class, 'MarkSheetView'])->name('marksheet.generate.view');
            Route::get('marksheet/generate/get', [MarkSheetController::class, 'MarkSheetGet'])->name('report.marksheet.get');
            // Attendance Report Routes
            Route::get('attendance/report/view', [AttenReportController::class, 'AttenReportView'])->name('attendance.report.view');
            Route::get('report/attendance/get', [AttenReportController::class, 'AttenReportGet'])->name('report.attendance.get');
            // Student Result Report Routes
            Route::get('student/result/view', [ResultReportController::class, 'ResultView'])->name('student.result.view');
            Route::get('student/result/get', [ResultReportController::class, 'ResultGet'])->name('report.student.result.get');
            // Student ID Card Routes
            Route::get('student/idcard/view', [ResultReportController::class, 'IdcardView'])->name('student.idcard.view');
            Route::get('student/idcard/get', [ResultReportController::class, 'IdcardGet'])->name('report.student.idcard.get');
        });
        //Master Data Route
        Route::prefix('master_setup')->group(function () {
            //view Route
            Route::get('master_data_add/view', [AppMasterDataController::class, 'ViewAppMasterData'])->name('masterdata.view');
            //add Mas
            Route::get('master_data_add/add', [AppMasterDataController::class, 'MasterDataAdd'])->name('masterdata.add');
            Route::post('master_data/store', [AppMasterDataController::class, 'MasterDataStore'])->name('masterdata.store');
            //inistitute Route
            Route::get('institute/view', [InstitutionInfoController::class, 'InstituteView'])->name('institute.view');
            // add
            Route::get('institute/add', [InstitutionInfoController::class, 'InstituteAdd'])->name('institute.add');
            //store
            Route::post('institute/store', [InstitutionInfoController::class, 'InstituteStore'])->name('institute.store');
            //edit
            Route::get('institute/edit/{id}', [InstitutionInfoController::class, 'InstituteEdit'])->name('institute.edit');
            //update
            Route::post('institute/update/{id}', [InstitutionInfoController::class, 'InstituteUpdate'])->name('institute.update');
            //delete
            Route::get('institute/delete/{id}', [InstitutionInfoController::class, 'InstituteDelete'])->name('institute.delete');

            // Route::get('designation/edit/{id}', [DesignationController::class, 'DesignationEdit'])->name('designation.edit');

            // Route::post('designation/update/{id}', [DesignationController::class, 'DesignationUpdate'])->name('update.designation');

            // Route::get('designation/delete/{id}', [DesignationController::class, 'DesignationDelete'])->name('designation.delete');
        });
    }); // End Middleare Auth Route

});  // Prevent Back Middleare
