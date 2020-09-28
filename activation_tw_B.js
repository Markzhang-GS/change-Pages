//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

var form1 = document.getElementById('form1');
var form2 = document.getElementById('form2');
var form3 = document.getElementById('form3');

var username = document.getElementById('NAME');
var email = document.getElementById('EMAIL');
var job = document.getElementById('JOB');
var company = document.getElementById('COMPANY');
var method = document.getElementById('METHOD');
var tel = document.getElementById('TEL');
var request = document.getElementById('REQUEST');
var city= document.getElementById('CITY');
var industry = document.getElementById('INDUSTRY');
var tel2 = document.getElementById('phone');
var SMS = document.getElementById('SMS');
var other1 = document.getElementById('others_indeed');
var other2 = document.getElementById('others_indeed2');




$(".next1").click(function(){
    if(checkInputs1() == 3) {
        if (animating) return false;
        animating = true;
        current_fs = $(this).parent().parent().parent().parent();
        next_fs = $(this).parent().parent().parent().parent().next();

        //activate next step on progressbar using the index of next_fs
        // $("#Activation_Steps li").eq($("fieldset").index(next_fs)).addClass("step--current");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                // left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'transform': 'scale(' + scale + ')'});
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        })
    }
})





$(".next2").click(function(){

    if(checkInputs2() == 7) {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent().parent().parent().parent();
        next_fs = $(this).parent().parent().parent().parent().next();

        //activate next step on progressbar using the index of next_fs
        // $("#Activation_Steps li").eq($("fieldset").index(next_fs)).addClass("step--current");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                // left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'transform': 'scale(' + scale + ')'});
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        })
    }
})









function checkInputs1() {
    // trim to remove the whitespaces
    var usernameValue = username.value.trim();
    var emailValue = email.value.trim();

    var jobValue = job.value.trim();
    var a=0;



    if(usernameValue === '') {
        setErrorFor(username, '請填入您的真實姓名');
    } else {
        setSuccessFor(username);
        a+=1;
    }

    if(emailValue === '') {
        setErrorFor(email, '請填入正確的郵箱.');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, '請填入正確的郵箱');
    }
    else {
        setSuccessFor(email);
        a+=1;
    }


    if (jobValue === '' && other2Value === '') {
        setErrorFor(job, '\n' +
            '請選擇您的職業');
    } else {
        setSuccessFor(job);
        a+=1;
    }

    return a;




}

function checkInputs2() {

    var companyValue = company.value.trim();
    var methodValue = method.value.trim();
    var requestValue = request.value.trim();
    var cityValue = city.value.trim();
    var industryValue = industry.value.trim();
    var other1Value = other1.value.trim();
    var other2Value = other2.value.trim();
    var SMSValue = SMS.value.trim();
    var telValue = tel2.value.trim();



    var b=0;



    if (companyValue === '') {
        setErrorFor(company, '請填入您的公司名稱');
    }
    else {
        setSuccessFor(company);
        b+=1;
    }

    if (methodValue === ''&& other1Value === '' ) {
        setErrorFor(method, '\n' +
            '請選擇您的了解渠道');
    }
    else {
        setSuccessFor(method);
        b+=1;
    }
    if (cityValue === '') {
        setErrorFor(city, '\n' +
            '請選擇您的所在城市');
    }
    else {
        setSuccessFor(city);
        b+=1;
    }

    if (industryValue === '') {
        setErrorFor(industry, '\n' +
            '請選擇您的所在行業');
    }
    else {
        setSuccessFor(industry);
        b+=1;
    }

    if (requestValue === '') {
        setErrorFor(request, '\n' +
            '請選擇您的需求');
    }
    else {
        setSuccessFor(request);
        b+=1;
    }
    if (telValue === '') {
        setErrorFor(tel, '\n' +
            '請填寫您的號碼');
    }
    else {
        setSuccessFor(tel);
        b+=1;
    }

    if (SMSValue === '') {
        setErrorFor(SMS, '請輸入驗證碼');
    }
    else {
        setSuccessFor(SMS);
        b+=1;
    }



    return b;
}






function setErrorFor(input, message) {
    var formControl = input.parentElement;
    var small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    var formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}



$(".previous").click(function(){
    if(animating) return false;
    animating = true;

    current_fs = $(this).parent().parent().parent();
    previous_fs = $(this).parent().parent().parent().prev();

    //de-activate current step on progressbar
    // $("#Activation_Steps li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            // left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
})
