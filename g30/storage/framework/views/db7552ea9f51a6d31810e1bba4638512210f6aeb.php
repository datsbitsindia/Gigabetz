<?php $__env->startSection('stylesheet'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
HOME
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<?php echo $__env->make('partials._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div id="owl-demo" class="owl-carousel">
    <div>
        <img src="<?php echo e(asset('public/frontend/images/01.jpg')); ?>">
    </div>
    <div>
        <img src="<?php echo e(asset('public/frontend/images/02.jpg')); ?>">
    </div>
    <div>
        <img src="<?php echo e(asset('public/frontend/images/03.jpg')); ?>">
    </div>
</div>

<div class="section arhamaadi">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="col-md-12 text-center mb-3">
                    <?php if(Auth::guest()): ?>
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-theme">संघ में जुडने के लिए यहाँ क्लिक किजिए</a>
                    
                    <?php else: ?>
                    <a href="<?php echo e(route('my-users')); ?>" class="btn btn-theme">संघ में जुडने के लिए यहाँ क्लिक किजिए</a>
                     <?php endif; ?>
                </div>
                <div class="yatra-sec">
                    <h1>वीर  प्रसूता  राजस्थान  की धन्यधरा <br>
                    श्री दासपॉंनगर से वढ़ियार प्रदेश की सुरम्य भूमि श्री शंखेश्वर महातीर्थ <br><br>
                    21 दिवसीय मोहमारक जयानंदकारक<br> छ'रि पालित तीर्थयात्रा संघ महोत्सव
                    <br><br>
                    पावन निश्रा: प.पू.आ.देव श्रीमद्द विजय जयानंदसूरीश्वरजी म.सा.
                    <br>
                    आदि विशाल श्रमण - श्रमणिवृन्द
                    <br><br>
                    निवेदक: श्रीमान शा गजराजजी छगनराजजी हरण परिवार
                    <br><br>
                    दासपॉंनगर से संघ प्रस्थान
                    <br>
                    वि.सं. 2078, पोष  वदि 1
                    <br>
                    सोमवार, 20 DEC 2021
                    <br><br>
                    श्री शंखेश्वर महातीर्थ संघ प्रवेश 
                    <br>
                    वि.सं. 2078, पोष सुद 6
                    <br>
                    शनिवार, 08 JAN 2022
                    <br><br>
                    श्री शंखेश्वर महातीर्थ  संघ माला एवं गुरु सप्तमी महोत्सव 
                    <br>
                    वि.सं. 2078, पोष  सुद 7
                    <br>
                    रविवार, 09 JAN 2022
                    </h1>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!--<iframe width="100%" height="345" src="https://www.youtube.com/embed/ebAEX0wQTo0"></iframe>-->
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/1xIWx8qhmQA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <!--<iframe width="100%" height="345" src="https://www.youtube.com/embed/MB57B3XgA2I"></iframe>-->
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/iEr6caS5ojg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!--<div class="section arhamaadi">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="yatra-sec">
                    <h1>Sri Ayodhyapuram to Sri Shatrunjay Mahatirth <br>
                    Paavan Nishra: Param Pujya Shrimadvijaya Rushabh Chandrasurishwarji MS Adi Shramana-Shramani Vrind
                     <br>
                    Organizer - LEHAR-KUNDAN Group
                    <br>
                    Nivedak: Shri Gerodevi Jethmalji Jain (Balgota) Family, Mengalwa (Rajasthan)
                    <br>Atithi Agaman: 10-02-2021 Wednesday  <br>
                    Sangh Prayan: 12-02-2021 Friday<br>
                    Sangh Mala: 18-02-2021 Thursday<br>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="juvan-yatraheading">
                    <h3>छःरि पालित यात्रा द्वारा तीर्थ स्पर्शना क्यों आवश्यक है ?</h3>
                </div>
                <div class="juvan-yatratext">
                    <p>
                    तीर्थ वह स्थान है जहाँ आस्था शरीर से आत्मा की ओर बह रही है, जहाँ वायूमण्डल धर्म और श्रद्धा से तरंगारित है, जहाँ से भव्य आत्माएँ उर्ध्वगामी हुई, जहाँ बैठकर साधक समाधिस्थ हुए, और जीवात्मा ने परमात्मा के दर्शन पाएँ, इस अनंत अनूठी घटनाओं के अनंत वर्षों तक घटते रहने से तीर्थ स्थल एक विशिष्ट उर्जा से संपन्न हो गए । तीर्थों में चेतना की धारा का प्रवाह है इसे प्रवाहित करने में सदियो से साधना की गयी और पुरुषार्थ की पावन उर्जा का संग्रहण किया गया तथा सम्यक दर्शन-ज्ञान-चारित्र के रत्नत्रयी की उपासना की गयी । इसलिए तीर्थ एनर्जी रिसेप्टिव सेंटर है । आध्यात्मिक राडार है तथा आत्म चेतना को जागृत करने का शाश्‍वत पावरहाउस है ।
                    <br>
                    इसलिए छःरि पालित यात्रा को पावन जीवन के लिए अनिवार्य माना गया है । तीर्थ यात्रा करने से कर्मों की निर्जरा होती है । तीर्थ यात्रा से अशुभ कर्मों का नाश होता है, रोम रोम में चेतना का प्रवाह बहता है ।
                    </p>


                    <!--<h3>विशेष सूचना -</h3>
                    <ul class="account-num">
                        <li> संघ यात्रा में एकासना करना अनिवार्य है । </li>
                        <li> संघ में यात्रा करने हेतु आराधकों की उम्र सीमा 50 वर्ष से अधिक नहीं होनी चाहिये । </li>
                        <li> सभी विवरण सही से भरें। एक बार विवरण भर दिए जाने के बाद आपको अपनी पंजीकृत ईमेल आईडी पर पंजीकरण की पुष्टि प्राप्त होगी जो आपने फॉर्म में दी थी। आप पुष्टि ईमेल में दिए गए लिंक से फॉर्म के अपने विवरण को संपादित कर सकते हैं।</li>
                        <li>इस आवेदन के साथ एक नवीनतम पासपोर्ट साइज फोटो और आधार कार्ड का फ्रंट और बैकसाइड भेजना होगा। </li>
                        <li> अपनी जानकारी जमा करने के बाद, आपको अगले 72 घंटों में एक फॉर्म नंबर एसएमएस या ईमेल द्वारा मिलेगा. फॉर्म नंबर को अर्हम आदि छ'री पालित संघ  के आपके पंजीकरण की स्थिति को ट्रैक करने के लिए इस्तेमाल किया जा सकता है| </li>
                        <li> ई-मेल, एसएमएस या कॉल द्वारा स्वीकृति संदेश प्राप्त करने पर, आप संघ में भाग ले सकते हैं। </li>
                        <li> फॉर्म जमा करने की अंतिम तिथि जल्द ही घोषित की जाएगी | </li>
                    </ul>-->

                    <h3>छःरि पालित यात्रा के आवश्यक नियम </h3>
                    <ul class="account-num">
                        <p>छःरि पालित संघ का अर्थ यह है कि उसमें छः नियमों का पालन आवश्यक है । वह छः नियम यह है</p>  
                        <li>ब्रह्मचारी : ब्रह्मचर्य का पूर्ण रूप से पालन करना</li>
                        <li>भूमि संथारी : भूमि पर शयन करना</li>
                        <li>एकल आहारी : एकासना का पच्चक्खाण पालना </li>
                        <li>पादचारी : पैदल चलना </li>
                        <li>सचित्त परिहारी : सचित्त वस्तुओं का त्याग करना </li>
                        <li>आवश्यककारी : सुबह-शाम प्रतिक्रमण करना एवं आवश्यक क्रिया में उपस्थित रहना । </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u215456295/domains/jayanandkarak.in/public_html/resources/views/welcome.blade.php ENDPATH**/ ?>