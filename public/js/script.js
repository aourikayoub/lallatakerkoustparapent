document.addEventListener('DOMContentLoaded', function() {
    const nav = document.getElementById('mainNav');
    const aboutSection = document.getElementById('about');

    if (!nav || !aboutSection) {
        console.error("Nav Bar أو قسم About غير موجود.");
        return;
    }

    // تحديد الموضع ديال قسم About (تقريباً بداية القسم)
    // aboutOffset هو عدد البيكسلات من أعلى الصفحة حتى يوصل قسم About
    const aboutOffset = aboutSection.offsetTop - nav.offsetHeight; 

    function changeNavOnScroll() {
        // window.scrollY هو موضع التمرير الحالي
        if (window.scrollY >= 50) {
            // إضافة كلاس 'scrolled' إذا وصل الموضع لقسم About
            nav.classList.add('scrolled');
        } else {
            // إزالة الكلاس 'scrolled' إذا رجع للأعلى
            nav.classList.remove('scrolled');
        }
    }

    // استدعاء الدالة في كل مرة المستخدم كيدير Scroll
    window.addEventListener('scroll', changeNavOnScroll);

    // استدعاء الدالة عند تحميل الصفحة للتأكد من الموضع الأولي
    changeNavOnScroll();
});



var CurrentLanguage = document.getElementsByTagName('html')[0];
var navLinks = document.querySelectorAll('.nav-link');

    if (CurrentLanguage.getAttribute('lang') == 'ar') {
        CurrentLanguage.setAttribute('dir' , 'rtl');
    }
    else {
        CurrentLanguage.setAttribute('dir' , 'ltr');
    }

    if (CurrentLanguage.getAttribute('lang') == 'es') {
        navLinks.forEach(link => {
            link.classList.add('.linkActive');
        });
    }


