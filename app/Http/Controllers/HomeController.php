<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('Dashboard');
    }
    public function calendar()
    {
        return view('Pages.app-calendar');
    }
    public function chat()
    {
        return view('Pages.app-chat');
    }
    public function blogDetail()
    {
        return view('Pages.apps-blog-detail');
    }
    public function blogGrid()
    {
    return view('Pages.apps-blog-grid');
    }
    public function blogList()
    {
    return view('Pages.apps-blog-list');
    }
    public function contactsGrid()
    {
        return view('Pages.apps-contacts-grid');
    }
    public function contactsList()
    {
        return view('Pages.apps-contacts-list');
    }
    public function contactsProfile()
    {
        return view('Pages.apps-contacts-profile');
    }
    public function emailInbox()
    {
        return view('Pages.apps-email-inbox');
    }
    public function emailRead()
    {
        return view('Pages.apps-email-read');
    }
    public function invoicesDetail()
    {
        return view('Pages.apps-invoices-detail');
    }
    public function invoicesList()
    {
        return view('Pages.apps-invoices-list');
    }
    public function avatars()
    {
        return view('Pages.avatars');
    }
    public function buttons()
    {
        return view('Pages.buttons');
    }
    public function cards()
    {
        return view('Pages.cards');
    }
    public function chartsApex()
    {
        return view('Pages.charts-apex');
    }
    public function chartsChartjs()
    {
        return view('Pages.charts-chartjs');
    }
    public function chartsEChart()
    {
        return view('Pages.charts-echart');
    }
    public function chartsKnob()
    {
        return view('Pages.charts-knob');
    }
    public function chartsSparkline()
    {
        return view('Pages.charts-sparkline');
    }
    public function colors()
    {
        return view('Pages.colors');
    }
    public function comingSoon()
    {
        return view('Pages.coming-soon');
    }
    public function confirmMail()
    {
        return view('Pages.confirm-mail');
    }
    public function dropdown()
    {
        return view('Pages.dropdown');
    }
    public function emailVerification()
    {
        return view('Pages.email-verification');
    }
    public function extendedLightbox()
    {
        return view('Pages.extended-lightbox');
    }
    public function extendedNotifications()
    {
        return view('Pages.extended-notifications');
    }
    public function extendedRangeSlider()
    {
        return view('Pages.extended-rangeslider');
    }
    public function extendedRating()
    {
        return view('Pages.extended-rating');
    }
    public function extendedSweetalert()
    {
        return view('Pages.extended-sweet-alert');
    }
    public function faqs()
    {
        return view('Pages.faqs');
    }
    public function fileUploads()
    {
        return view('Pages.file-uploads');
    }
    public function flexboxGrid()
    {
        return view('Pages.flexbox&grid');
    }
    public function formAdvanced()
    {
        return view('Pages.form-advanced');
    }
    public function formEditors()
    {
        return view('Pages.form-editors');
    }
    public function formElements()
    {
        return view('Pages.form-elements');
    }
    public function formMask()
    {
        return view('Pages.form-mask');
    }
    public function formValidation()
    {
        return view('Pages.form-validation');
    }
    public function formWizard()
    {
        return view('Pages.form-wizard');
    }
    public function general()
    {
        return view('Pages.general');
    }
    public function iconsBoxIcons()
    {
        return view('Pages.icons-boxicons');
    }
    public function iconsDripIcons()
    {
        return view('Pages.icons-dripicons');
    }
    public function iconsMaterialDesign()
    {
        return view('Pages.icons-materialdesign');
    }

    public function lockScreen()
    {
        return view('Pages.lock-screen');
    }
    // public function login()
    // {
    //     return view('Auth.login');
    // }
    // public function logout()
    // {
    //     return view('Pages.logout');
    // }
    public function maintenance()
    {
        return view('Pages.maintenance');
    }
    public function mapsGoogle()
    {
        return view('Pages.maps-google');
    }
    public function mapsLeaflet()
    {
        return view('Pages.maps-leaflet');
    }
    public function mapsVector()
    {
        return view('Pages.maps-vector');
    }
    public function modals()
    {
        return view('Pages.modals');
    }
    public function pricing()
    {
        return view('Pages.pricing');
    }
    public function progress()
    {
        return view('Pages.progress');
    }
    public function recoverPassword()
    {
        return view('Pages.recoverpw');
    }
    // public function register()
    // {
    //     return view('Auth.register');
    // }
    public function sizing()
    {
        return view('Pages.sizing');
    }
    public function tablesBasic()
    {
        return view('Pages.tables-basic');
    }
    // public function tablesDatatable()
    // {
    //     return view('Pages.tables-datatable');
    // }
    public function tablesEditable()
    {
        return view('Pages.tables-editable');
    }
    public function tablesResponsive()
    {
        return view('Pages.tables-responsive');
    }
    public function tabsAccordions()
    {
        return view('Pages.tabs&accordions');
    }
    public function timeLine()
    {
        return view('Pages.timeline');
    }
    public function toasts()
    {
        return view('Pages.toasts');
    }
    public function twoStepVerification()
    {
        return view('Pages.two-step-verification');
    }
    public function typography()
    {
        return view('Pages.typography');
    }
    public function utilities()
    {
        return view('Pages.utilities');
    }


}
