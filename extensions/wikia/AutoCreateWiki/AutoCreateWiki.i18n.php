<?php
/**
 * Internationalization file for AutoCreateWiki extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	"autocreatewiki" => "Create a new wiki",
	"autocreatewiki-desc" => "Create wiki in WikiFactory by user requests",
	"autocreatewiki-page-title-default" => "Create a new wiki",
	"autocreatewiki-page-title-answers" => "Create a new Answers site",
	"createwiki"=> "Create a new wiki",
	"autocreatewiki-chooseone" => "Choose one",
	"autocreatewiki-required" => "$1 = required",
	"autocreatewiki-web-address" => "Web address:",
	"autocreatewiki-category-select" => "Select one",
	"autocreatewiki-language-top" => "Top $1 languages",
	"autocreatewiki-language-all" => "All languages",
	"autocreatewiki-birthdate" => "Birth date:",
	"autocreatewiki-blurry-word" => "Blurry word:",
	"autocreatewiki-remember" => "Remember me",
	"autocreatewiki-create-account" => "Create an account",
	"autocreatewiki-done" => "done",
	"autocreatewiki-error" => "error",
	"autocreatewiki-haveaccount-question" => "Do you already have a Wikia account?",
	"autocreatewiki-success-title-default" => "Your wiki has been created!",
	"autocreatewiki-success-title-answers" => "Your answers site has been created!",
	"autocreatewiki-success-subtitle" => "You can now begin working on your wiki by visiting:",
	"autocreatewiki-success-has-been-created" => "has been created!",
	"autocreatewiki-success-get-started" => "Get Started",
// form messages
	"autocreatewiki-info-domain" => "It's best to use a word likely to be a search keyword for your topic.",
	"autocreatewiki-info-topic" => "Add a short description such as \"Star Wars\" or \"TV shows\".",
	"autocreatewiki-info-category-default" => "This will help visitors find your wiki.",
	"autocreatewiki-info-category-answers" => "This will help visitors find your Answers site.",
	"autocreatewiki-info-language" => "This will be the default language for visitors to your wiki.",
	"autocreatewiki-info-email-address" => "Your email address is never shown to anyone on Wikia.",
	"autocreatewiki-info-realname" => "If you choose to provide it, this will be used for giving you attribution for your work.",
	"autocreatewiki-info-birthdate" => "Wikia requires all users to provide their real date of birth as both a safety precaution and as a means of preserving the integrity of the site while complying with federal regulations.",
	"autocreatewiki-info-blurry-word" => "To help protect against automated account creation, please type the blurry word that you see into this field.",
	"autocreatewiki-info-terms-agree" => "By creating a wiki and a user account, you agree to the <a href=\"http://www.wikia.com/wiki/Terms_of_use\">Wikia's Terms of Use</a>",
	"autocreatewiki-info-staff-username" => "<b>Staff only:</b> The specified user will be listed as the founder.",
	"autocreatewiki-title-template" => "$1 Wiki",
	"autocreatewiki-tagline" => "",
// errors
	"autocreatewiki-limit-day" => "Wikia has exceeded the maximum number of wiki creations today ($1).",
	"autocreatewiki-limit-creation" => "You have exceeded the maximum number of wiki creation in 24 hours ($1).",
	"autocreatewiki-empty-field" => "Please complete this field.",
	"autocreatewiki-bad-name" => "The name cannot contain special characters (like $ or @) and must be a single lower-case word without spaces.",
	"autocreatewiki-invalid-wikiname" => "The name cannot contain special characters (like $ or @) and cannot be empty",
	"autocreatewiki-violate-policy" => "This wiki name contains a word that violates our naming policy",
	"autocreatewiki-name-taken" => "There’s already a wiki with this address. Start editing at <a href=\"http://$1.wikia.com\">http://$1.wikia.com</a> or choose another address.",
	"autocreatewiki-name-too-short" => "This address is too short, choose an address with at least 3 characters.",
	"autocreatewiki-name-too-long" => "This address is too long. Please choose an address with maximum 50 characters.",
	"autocreatewiki-similar-wikis" => "Below are the wikis already created on this topic. We suggest editing one of them.",
	"autocreatewiki-invalid-username" => "This username is invalid.",
	"autocreatewiki-busy-username" => "This username is already taken.",
	"autocreatewiki-blocked-username" => "You cannot create account.",
	"autocreatewiki-user-notloggedin" => "Your account was created but not logged in!",
	"autocreatewiki-empty-language" => "Please select the language for the wiki.",
	"autocreatewiki-empty-category" => "Please select a category.",
	"autocreatewiki-empty-wikiname" => "The name of the wiki cannot be empty.",
	"autocreatewiki-empty-username" => "Username cannot be empty.",
	"autocreatewiki-empty-password" => "Password cannot be empty.",
	"autocreatewiki-empty-retype-password" => "Retype password cannot be empty.",
	"autocreatewiki-category-label" => "Category:",
	"autocreatewiki-category-other" => "Other",
	"autocreatewiki-set-username" => "Set username first.",
	"autocreatewiki-invalid-category" => "Invalid value of category.
Please select proper from dropdown list.",
	"autocreatewiki-invalid-language" => "Invalid value of language.
Please select proper from dropdown list.",
	"autocreatewiki-invalid-retype-passwd" => "Please retype the same password as above",
	"autocreatewiki-invalid-birthday" => "Invalid birth date",
	"autocreatewiki-limit-birthday" => "Unable to create registration.",
// processing
	"autocreatewiki-log-title" => "Your wiki is being created",
	"autocreatewiki-step0" => "Initializing process ...",
	"autocreatewiki-stepdefault" => "Process is running, please wait ...",
	"autocreatewiki-errordefault" => "Process was not finished ...",
	"autocreatewiki-step1" => "Creating images folder ...",
	"autocreatewiki-step2" => "Creating database ...",
	"autocreatewiki-step3" => "Setting default information in database ...",
	"autocreatewiki-step4" => "Copying default images and logo ...",
	"autocreatewiki-step5" => "Setting default variables in database ...",
	"autocreatewiki-step6" => "Setting default tables in database ...",
	"autocreatewiki-step7" => "Setting language starter ...",
	"autocreatewiki-step8" => "Setting user groups and categories ...",
	"autocreatewiki-step9" => "Setting variables for new wiki ...",
	"autocreatewiki-step10" => "Setting pages on central wiki ...",
	"autocreatewiki-step11" => "Sending email to user ...",
	"autocreatewiki-redirect" => "Redirecting to new wiki: $1 ...",
	"autocreatewiki-congratulation" => "Congratulations!",
	"autocreatewiki-welcometalk-log" => "Welcome Message",
	"autocreatewiki-regex-error-comment" => "used in wiki $1 (whole text: $2)",
// processing errors
	"autocreatewiki-step2-error" => "Database exists!",
	"autocreatewiki-step3-error" => "Cannot set default information in database!",
	"autocreatewiki-step6-error" => "Cannot set default tables in database!",
	"autocreatewiki-step7-error" => "Cannot copy starter database for language!",
	"requestwiki-filter-language" => "kh,kp,mu,als,an,ast,de-form,de-weig,dk,en-gb,ia,ie,ksh,mwl,pdc,pfl,simple,tokipona,tp,zh-cn,zh-hans,zh-hant,zh-hk,zh-mo,zh-my,zh-sg,zh-tw",
// task
	"autocreatewiki-protect-reason" => 'Part of the official interface',
	"autocreatewiki-welcomesubject" => "$1 has been created!",
	"autocreatewiki-welcomebody" => "Hello $2!

Your wiki has been created! Take a look: <$1>

Ready to get started? We’ve added some links to your talk page (<$5>) to help you get started and to encourage you to explore the many helpful areas around Wikia. If you have any questions or feel a bit lost, reply to this email or check out our Help pages <http://help.wikia.com>.

You can also check out the Founder & Admin blog <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> and the Wikia Staff blog <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> where you’ll find tips and tricks, info about new features and new things happening at Wikia.

Happy editing!

$3
Wikia Community Support
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Want to receive fewer messages from us? You can unsubscribe or change your email preferences here: http://community.wikia.com/Special:Preferences",
	"autocreatewiki-welcometalk-wall-title" => "Welcome!",
        "autocreatewiki-welcometalk-wall" => "Hey there!
We're excited to have {{subst:SITENAME}} as part of the Wikia community! There's still a lot to do, so here are some helpful tips and links to get your wiki going:
*Not sure where to begin? Stop by [[w:c:community:Admin_Central:Main_Page|Founder &amp; Admin Central]] and check out the [[w:c:community:Blog:Wikia_Founders_&_Admins|Blog]] for tips on how to jump start your wiki and make it grow!
*Visit [[w:c:community:main page|Community Central]] to make friends via [[w:c:community:Special:Chat|chat]], learn about new features and get updated on Wikia news and upcoming features on the [[w:c:community:Blog:Wikia_Staff_Blog|Staff Blog]].
*Take a look at our [[w:c:community:Webinars|webinar series]] -- where you can sign up to interact with Wikia staff, as well as watch past sessions
*Be sure to check out [[Special:WikiFeatures|Wiki Features]] to see what features you can enable on your wiki!
*Explore our [[w:c:community:Admin_Central:Forum|forums]] on Founder and Admin Central to see what other wiki admins are asking. 
*Lastly, visit our [[w:c:community:Help:Contents|Help Pages]] to answer any specific question you may have.
All of the above links are a great place to start exploring Wikia. If you get stuck or have a question you can't find the answer to -- please contact us [[Special:Contact|here]]. But most importantly, have fun! :)
Happy editing!",

	"autocreatewiki-welcometalk" => "==Welcome!==
<div style=\"font-size:120%; line-height:1.2em;\">Hi $1 -- we're excited to have '''$4''' as part of the Wikia community!

Now you've got a whole website to fill up with information, pictures and videos about your favorite topic. But right now, it's just blank pages staring at you... Scary, right? Here are some ways to get started.

* '''Introduce your topic''' on the front page. This is your opportunity to explain to your readers what your topic is all about. Write as much as you want! Your description can link off to all the important pages on your site.

* '''Start some new pages''' -- just a sentence or two is fine to get started. Don't let the blank page stare you down! A wiki is all about adding and changing things as you go along. You can also add pictures and videos, to fill out the page and make it more interesting.

And then just keep going! People like visiting wikis when there's lots of stuff to read and look at, so keep adding stuff, and you'll attract readers and editors. There's a lot to do, but don't worry -- today's your first day, and you've got plenty of time. Every wiki starts the same way -- a little bit at a time, starting with the first few pages, until it grows into a huge, busy site.

If you've got questions, you can e-mail us through our [[Special:Contact|contact form]]. Have fun!

-- [[User:$2|$3]] <staff /></div>",
// new wikis - special page
	"newwikis" => "New wikis",
	"newwikisstart" => "Display wikis starting at:",

// retention emails
	"autocreatewiki-reminder-subject" => "{{SITENAME}}",
	"autocreatewiki-reminder-body" => "
Dear $1:

Congratulations on starting your new wiki, {{SITENAME}}! You can come back and add more to your wiki by visiting $2.

This is a brand-new project, so please write to us if you have any questions!


-- Wikia Community Team",
	"autocreatewiki-reminder-body-HTML" => "
<p>Dear $1:</p>

<p>Congratulations on starting your new wiki, {{SITENAME}}! You can come back and add more to your wiki by visiting
<a href=\"$2\">$2</a>.</p>

<p>This is a brand-new project, so please write to us if you have any questions!</p>

<p>-- Wikia Community Team</p>",
	'autocreatewiki-subname-answers' => 'Answers',

	'autocreatewiki-language-top-list' => 'de,en,es,fr,it,ja,nl,no,pl,pt,pt-br,ru,zh',
);

/** Message documentation (Message documentation)
 * @author Prima klasy4na
 * @author Purodha
 * @author Siebrand
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'autocreatewiki-desc' => '{{desc}}',
	'autocreatewiki-page-title-answers' => '"Answers sites" are  special wikis of the type answers.wikia.com, where you ask and answer questions.',
	'autocreatewiki-blurry-word' => 'Message {{msg-Wikia|Autocreatewiki-info-blurry-word}} refers here.',
	'autocreatewiki-create-account' => '{{Identical|Create an account}}',
	'autocreatewiki-success-title-answers' => '"Answers sites" are  special wikis of the type answers.wikia.com, where you ask and answer questions.',
	'autocreatewiki-success-has-been-created' => 'Used as a subtitle to complete the page title, which displays the domain name of the created wiki.',
	'autocreatewiki-info-category-answers' => '"Answers sites" are  special wikis of the type answers.wikia.com, where you ask and answer questions.',
	'autocreatewiki-info-realname' => '{{Identical|Real name attribution}}',
	'autocreatewiki-info-blurry-word' => 'Message {{msg-Wikia|Autocreatewiki-blurry-word}} refers here.',
	'autocreatewiki-title-template' => 'This will be the sitename of the wiki, i.e. the text that shows up in the TITLE element as well as in other places on the site.',
	'autocreatewiki-subname-answers' => '"Answers sites" are  special wikis of the type answers.wikia.com, where you ask and answer questions.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'autocreatewiki' => "Skep 'n nuwe Wiki",
	'autocreatewiki-page-title-default' => "Skep 'n nuwe Wiki",
	'createwiki' => "Skep 'n nuwe Wiki",
	'autocreatewiki-chooseone' => 'Kies een',
	'autocreatewiki-required' => '$1 = word vereis',
	'autocreatewiki-web-address' => 'Webtuiste:',
	'autocreatewiki-category-select' => 'Kies een',
	'autocreatewiki-language-top' => 'Top $1 tale',
	'autocreatewiki-language-all' => 'Alle tale',
	'autocreatewiki-birthdate' => 'Dag van geboorte:',
	'autocreatewiki-blurry-word' => 'Wasige woord:',
	'autocreatewiki-remember' => 'Onthou my',
	'autocreatewiki-create-account' => "Skep 'n rekening",
	'autocreatewiki-done' => 'gedoen',
	'autocreatewiki-error' => 'fout',
	'autocreatewiki-success-get-started' => 'Begin',
	'autocreatewiki-info-staff-username' => '<b>Slegs vir personeel:</b> die gespesifiseerde gebruiker sal as die stigter gelys word.',
	'autocreatewiki-title-template' => '$1 wiki',
	'autocreatewiki-empty-field' => 'Voltooi asseblief hierdie veld.',
	'autocreatewiki-invalid-username' => 'Hierdie gebruikersnaam is ongeldig.',
	'autocreatewiki-busy-username' => 'Hierdie gebruikersnaam is reeds geneem.',
	'autocreatewiki-user-notloggedin' => 'U rekening is geskep maar nie ingeteken nie.',
	'autocreatewiki-empty-language' => 'Kies asseblief die Wiki se taal.',
	'autocreatewiki-empty-category' => 'Kies asseblief een van die kategorieë.',
	'autocreatewiki-empty-wikiname' => 'Die naam van die Wiki kan nie leeg wees nie.',
	'autocreatewiki-empty-username' => 'Gebruikersnaam kan nie leeg wees nie.',
	'autocreatewiki-empty-password' => 'Wagwoord kan nie leeg wees nie.',
	'autocreatewiki-empty-retype-password' => 'Herhaling van wagwoord kan nie leeg wees nie.',
	'autocreatewiki-category-label' => 'Kategorie:',
	'autocreatewiki-category-other' => 'Ander',
	'autocreatewiki-set-username' => 'Stel eers die gebruikersnaam.',
	'autocreatewiki-invalid-birthday' => 'Ongeldige geboortedatum',
	'autocreatewiki-step2' => 'Besig om databasis te skep...',
	'autocreatewiki-congratulation' => 'Baie geluk!',
	'autocreatewiki-welcometalk-log' => 'Welkom-boodskap',
	'autocreatewiki-step2-error' => 'Databasis bestaan al!',
	'autocreatewiki-protect-reason' => 'Deel van die amptelike koppelvlak',
	'autocreatewiki-welcomesubject' => '$1 is geskep!',
	'newwikis' => "Nuwe wiki's",
	'newwikisstart' => "Wys wiki's, beginnende by:",
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
);

/** Arabic (العربية)
 * @author Achraf94
 * @author Alexknight12
 * @author ترجمان05
 */
$messages['ar'] = array(
	'autocreatewiki' => 'أنشئ ويكي جديدة',
	'autocreatewiki-desc' => 'أنشأ ويكي في ويكيفاكتوري من قبل طلب المستخدم',
	'autocreatewiki-page-title-default' => 'إنشاء ويكي جديدة',
	'autocreatewiki-page-title-answers' => 'إنشاء موقع إجابات جديد',
	'createwiki' => 'إنشاء ويكي جديد',
	'autocreatewiki-chooseone' => 'إختر واحدة',
	'autocreatewiki-required' => '$1 = مطلوب',
	'autocreatewiki-web-address' => 'عنوان الويب:',
	'autocreatewiki-category-select' => 'إختر واحدة',
	'autocreatewiki-language-top' => ' أحسن $1 لغة',
	'autocreatewiki-language-all' => 'كل اللغات',
	'autocreatewiki-birthdate' => 'تاريخ الميلاد',
	'autocreatewiki-blurry-word' => 'كلمة غامضة:',
	'autocreatewiki-remember' => 'تذكرني',
	'autocreatewiki-create-account' => 'إنشاء حساب',
	'autocreatewiki-done' => 'تم',
	'autocreatewiki-error' => 'خطأ',
	'autocreatewiki-haveaccount-question' => 'هل لديك حساب على ويكيا؟',
	'autocreatewiki-success-title-default' => 'تم إنشاء الويكي !',
	'autocreatewiki-success-title-answers' => 'تم إنشاء موقع الأجوبة!',
	'autocreatewiki-success-subtitle' => 'يمكنك أن تبدأ العمل الآن على ويكي الخاص بك عن طريق زيارة :',
	'autocreatewiki-success-has-been-created' => 'وقد أنشئت!',
	'autocreatewiki-success-get-started' => 'إبدأ',
	'autocreatewiki-info-domain' => 'من الافضل لاستخدام كلمة المحتمل أن تكون كلمة رئيسية للبحث عن الموضوع الخاص بك',
	'autocreatewiki-info-topic' => 'أضف وصفا موجزا مثل "لوست" أو "ناروو".',
	'autocreatewiki-info-category-default' => 'هذا يساعد الزوار على العثور على الويكي التي تنشأها',
	'autocreatewiki-info-category-answers' => 'هذا سوف يساعد الزوار على العثور على موقع الإجابات الذي تنشأه.',
	'autocreatewiki-info-language' => ' ستكون هذه هي اللغة الافتراضية للزوار الويكي الخاص بك',
	'autocreatewiki-info-email-address' => 'بريدك الإلكروني لن يظهر لأي شخص على ويكيا.',
	'autocreatewiki-info-realname' => 'إذا إخترت أن تزود هذه المعلومة فستستعمل في إعطائك الشكر على عملك.',
	'autocreatewiki-info-birthdate' => 'ويكيا تطلب من جميع المستخدمين تقديم تاريخ الولادة الحقيقي على حد سواء وذلك كاجراء وقائي كوسيلة للحفاظ على سلامة الموقع مع الامتثال للقوانين الاتحادية.',
	'autocreatewiki-info-blurry-word' => 'لمساعدة في حماية ضد إنشاء الحساب الآلي ، يرجى كتابة كلمة الباهتة التي تشاهدها في هذا المجال.',
	'autocreatewiki-info-terms-agree' => 'عن طريق إنشاء ويكي و حساب مستخدم، أنت توافق على <a href="http://www.wikia.com/wiki/Terms_of_use">شروط استخدام ويكيا</a>',
	'autocreatewiki-info-staff-username' => '<b>للموظفين فقط:</b> هذا المستخدم المحدد سيكون مدرجا كمؤسس.',
	'autocreatewiki-limit-day' => 'لقد تجاوزت عدد ويكيا الأقصى لإنشاء الويكيات في هذا اليوم($1).',
	'autocreatewiki-limit-creation' => 'لقد تجاوزت الحد الأقصى لعدد من إنشاء ويكي في 24 ساعة ($1).',
	'autocreatewiki-empty-field' => 'يرجى استكمال هذا المجال.',
	'autocreatewiki-bad-name' => 'هذا الإسم لا يمكنه أن يحتوي على أحرف خاصة (مثل $ أو @)و يجب أن يكون كلمة مفردة بدون مسافات.',
	'autocreatewiki-invalid-wikiname' => 'الإسم لا يمكن أن يحتوي على أحرف خاصة (مثل  $ أو @) و لا يمكن أن يكون فارغا',
	'autocreatewiki-log-title' => 'يتم الآن إنشاء الويكي',
	'autocreatewiki-step0' => 'تهيئة العملية ...',
	'autocreatewiki-congratulation' => 'مبروك!',
	'autocreatewiki-welcometalk-log' => 'رسالة ترحيب',
	'autocreatewiki-welcometalk' => "== أهلا و سهلا ! ==
<div style=\"font-size:120%; line-height:1.2em;\"> مرحبا  \$1 -- نحن متحمسون جدا لوجود  '''\$4''' كجزء من مجتمع ويكيا العربية!

الآن لديك الموقع كله لملءه  بالمعلومات والصور وأشرطة الفيديو المفضلة لديك حول الموضوع الخاص بك. ولكن في الوقت الراهن ،  صفحات فارغة فقط تحدق فيك أنت... مخيف جدا ، أليس كذلك؟ فيما يلي بعض الطرق للبدء.

* '''قدم موضوعك''' في الصفحة الرئيسية. هذه فرصتك لفسر للقراء ماهو الموضوع الذي ستكون حوله هذه الويكي. أكتب بقدر ما تستطيع! 

* '''إبدأ بعض الصفحات الجديدة''' -- فقط عبارة أو اثنتين هما كافيتان للبداية. لا تدع الصفحات الفارغة تحبطك! الويكي هي حول الإضافة و تغيير الأشياء كلما تتقدم. يمكنك أيضا إضافة الصور و مقاطع الفيديو، لملأ الصفحات و جعلها جالبة أكثر.

ثم واصل إلى الأمام! الناس يحبون دائما زيارة الويكيات لأنهم لديهم الكثير من الوقت للقراءة و التصفح، لذلك دائما أضف أشياء، و سوف تجلب قراء و محررين. هناك الكثير من الأشياء التي يجب القيام بها لكن لا تقلق -- اليوم هو يومك الأول، و لديك الكثير من الوقت. كل ويكي تبدأ بنفس الطريقة -- مع بعض الوقت، وبداية صفحات جديدة، حتى تنمو و تصبح كبيرة، و موقعا رائعا.

أيضا لا تنسى زيارة موقع [[w:c:ar|ويكيا العربية]] للمزيد من المعلومات و المساعدة.

-- [[مستخدم:\$2|\$3]] <staff /></div>", # Fuzzy
	'newwikis' => 'ويكيات جديدة',
	'autocreatewiki-subname-answers' => 'إجابات',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'autocreatewiki' => 'এখন নতুন ৱিকি সৃষ্টি কৰক',
	'autocreatewiki-page-title-default' => 'এখন নতুন ৱিকি সৃষ্টি কৰক',
	'createwiki' => 'এখন নতুন ৱিকি সৃষ্টি কৰক',
	'autocreatewiki-required' => '$1 = প্ৰয়োজন',
	'autocreatewiki-web-address' => 'ৱেব ঠিকনা:',
	'autocreatewiki-category-select' => 'এটা নিৰ্বাচন কৰক',
	'autocreatewiki-language-top' => 'শীৰ্ষৰ $1 ভাষাসমূহ',
	'autocreatewiki-language-all' => 'সকলোবোৰ ভাষা',
	'autocreatewiki-birthdate' => 'জন্ম তাৰিখ:',
	'autocreatewiki-remember' => 'মোৰ প্ৰৱেশ মনত ৰাখক',
	'autocreatewiki-create-account' => 'নতুন একাউণ্ট খোলক',
	'autocreatewiki-done' => 'কৰা হ’ল',
	'autocreatewiki-error' => 'ভুল',
	'autocreatewiki-success-title-default' => 'আপোনাৰ ৱিকি সৃষ্টি ক’ৰা হ’ল',
	'autocreatewiki-success-has-been-created' => 'সৃষ্টি কৰা হ’ল!',
	'autocreatewiki-success-get-started' => 'যাত্ৰা আৰম্ভ কৰক',
	'autocreatewiki-title-template' => '$1 ৱিকি',
	'autocreatewiki-invalid-username' => 'এই সদস্য নাম অবৈধ',
	'autocreatewiki-busy-username' => 'এই সদস্যনাম ইতিমধ্যে আছেই',
	'autocreatewiki-blocked-username' => 'আপুনি একাউণ্ট সৃষ্টি কৰিব নোৱাৰে',
	'autocreatewiki-category-label' => 'শ্ৰেণী:',
	'autocreatewiki-category-other' => 'অন্যান্য',
	'autocreatewiki-invalid-birthday' => 'অবৈধ জন্মৰ তাৰিখ',
	'autocreatewiki-congratulation' => 'অভিন্দন!',
	'autocreatewiki-welcometalk-log' => 'আদৰণি বাৰ্তা',
	'autocreatewiki-welcomesubject' => '$1 সৃষ্টি কৰা হ’ল!',
	'newwikis' => 'নতুন ৱিকিসমূহ',
	'autocreatewiki-subname-answers' => 'উত্তৰসমূহ',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'autocreatewiki-web-address' => 'Veb ünvanı:',
	'autocreatewiki-language-all' => 'Bütün dillər',
	'autocreatewiki-birthdate' => 'Doğum tarixi:',
	'autocreatewiki-done' => 'heç biri',
	'autocreatewiki-error' => 'xəta',
	'autocreatewiki-title-template' => '$1 Viki',
	'autocreatewiki-category-label' => 'Kateqoriya:',
	'autocreatewiki-category-other' => 'Digər',
	'autocreatewiki-subname-answers' => 'Cavablar',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'autocreatewiki' => 'Стварыць новую вікі',
	'autocreatewiki-page-title-default' => 'Стварыць новую вікі',
	'autocreatewiki-language-all' => 'Усе мовы',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 */
$messages['bg'] = array(
	'autocreatewiki' => 'Създаване на ново уики',
	'autocreatewiki-page-title-default' => 'Заявка за ново уики',
	'createwiki' => 'Създаване на уики',
	'autocreatewiki-required' => '$1 = задължително',
	'autocreatewiki-web-address' => 'Уеб адрес:',
	'autocreatewiki-language-all' => 'Всички езици',
	'autocreatewiki-birthdate' => 'Дата на раждане:',
	'autocreatewiki-create-account' => 'Създаване на сметка',
	'autocreatewiki-done' => 'готово',
	'autocreatewiki-error' => 'грешка',
	'autocreatewiki-success-title-default' => 'Вашето уики беше създадено!',
	'autocreatewiki-bad-name' => 'Името не може да съдържа специални символи (като $ или @) и е необходимо да е една дума, изписана с малки букви и без интервали.',
	'autocreatewiki-violate-policy' => 'Името на уикито съдържа дума, която нарушава политиката ни за наименуване',
	'autocreatewiki-name-taken' => 'Вече съществува уики с този адрес. Можете да го редактирате на <a href="http://$1.wikia.com">http://$1.wikia.com</a> или да изберете друг адрес.',
	'autocreatewiki-name-too-short' => 'Този адрес е твърде кратък. Изберете адрес с поне 3 знака.',
	'autocreatewiki-name-too-long' => 'Този адрес е твърде дълъг. Изберете адрес, състоящ се от най-много 50 знака.',
	'autocreatewiki-similar-wikis' => 'По-долу са уикитата на тази тема, които вече съществуват. Обмислете да допринасяте към някое от тях.',
	'autocreatewiki-invalid-username' => 'Това потребителско име е невалидно.',
	'autocreatewiki-busy-username' => 'Избраното потребителско име е вече заето.',
	'autocreatewiki-empty-username' => 'Полето за потребителско име не може да бъде празно.',
	'autocreatewiki-empty-password' => 'Полето за парола не може да бъде празно.',
	'autocreatewiki-category-label' => 'Категория:',
	'autocreatewiki-invalid-birthday' => 'Невалидна дата на раждане',
	'autocreatewiki-step0' => 'Стартиране на процеса ...',
	'autocreatewiki-step1' => 'Създаване на директорията за изображения ...',
	'autocreatewiki-step2' => 'Създаване на базата данни ...',
	'autocreatewiki-step4' => 'Копиране на основните изображения и лого ...',
	'autocreatewiki-step5' => 'Създаване на основните променливи в базата от данни ...',
	'autocreatewiki-step6' => 'Създаване на основните таблици в базата от данни ...',
	'autocreatewiki-step8' => 'Създаване потребителски групи и категории ...',
	'autocreatewiki-step9' => 'Създаване променливите за новото уики ...',
	'autocreatewiki-step10' => 'Създаване страници в централното уики ...',
	'autocreatewiki-redirect' => 'Пренасочване към новото уики: $1 ...',
	'autocreatewiki-congratulation' => 'Поздравления!',
	'autocreatewiki-step2-error' => 'Базата данни съществува!',
	'newwikis' => 'Нови уикита',
	'autocreatewiki-subname-answers' => 'Отговори',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Gwenn-Ael
 * @author Y-M D
 */
$messages['br'] = array(
	'autocreatewiki' => 'Krouiñ ur Wiki nevez.',
	'autocreatewiki-desc' => 'Krouiñ ur wiki er WikiFactory dre rekedoù implijerien',
	'autocreatewiki-page-title-default' => 'Krouiñ ur wiki nevez',
	'autocreatewiki-page-title-answers' => "Krouiñ ul lec'hienn respontoù nevez",
	'createwiki' => 'Krouiñ ur Wiki nevez',
	'autocreatewiki-chooseone' => 'Dibab unan',
	'autocreatewiki-required' => '$1 = dre ret',
	'autocreatewiki-web-address' => "Chomlec'h web :",
	'autocreatewiki-category-select' => 'Diuzañ unan',
	'autocreatewiki-language-top' => 'Ar $1 yezh implijetañ',
	'autocreatewiki-language-all' => 'An holl yezhoù',
	'autocreatewiki-birthdate' => 'Deiziad ganedigezh :',
	'autocreatewiki-blurry-word' => 'Gerioù dispis  :',
	'autocreatewiki-remember' => "Derc'hel soñj ac'hanon",
	'autocreatewiki-create-account' => 'Krouiñ ur gont',
	'autocreatewiki-done' => 'graet',
	'autocreatewiki-error' => 'fazi',
	'autocreatewiki-haveaccount-question' => 'Hag ur gont Wikia ho peus dija ?',
	'autocreatewiki-success-title-default' => 'Krouet eo bet ho wiki !',
	'autocreatewiki-success-title-answers' => "Krouet eo bet ho lec'hienn respontoù.",
	'autocreatewiki-success-subtitle' => 'Gallout a rit kregiñ da labourat war ho wiki en ur weladenniñ :',
	'autocreatewiki-success-has-been-created' => 'a zo bet krouet !',
	'autocreatewiki-success-get-started' => 'Kregiñ',
	'autocreatewiki-info-domain' => "Ar gwellañ zo implijout ur ger a vo, evit doare, ur ger-alc'hwez evit klask diwar-benn ho tanvez.",
	'autocreatewiki-info-topic' => 'Ouzhpennañ un deskrivadur evel « Brezel ar Stered » pe « Abadenn skinwel ».',
	'autocreatewiki-info-category-default' => 'Sikour a raio an dra-mañ ar weladennerien da gavout ho wiki.',
	'autocreatewiki-info-category-answers' => "Sikour a raio an dra-mañ ar weladennerien da gavout ho lec'hienn Respontoù.",
	'autocreatewiki-info-language' => "An dra-se a c'hall bezañ ar yezh dre ziouer evit an dud a zeu da welet ho wiki.",
	'autocreatewiki-info-email-address' => "Morse ne vez diskouezet ho chomlec'h da zen ebet war wiki.",
	'autocreatewiki-info-realname' => "Ma tibabit reiñ ho kwir anv e vo implijet evit reiñ ho labour deoc'h.",
	'autocreatewiki-info-birthdate' => "Goulenn a ra Wikia digant an implijerien reiñ o deiziad ganedigezh gwirion evel doare gwareziñ hag evel doare diwall anterinder al lec'hienn en ur sevel a-du gant reolennoù kevredadel ar Stadoù-Unanet.",
	'autocreatewiki-info-blurry-word' => "Evit sikour ac'hanomp d'en em wareziñ a-enep krouiñ emgefreek kontoù, biskrivit ar ger dispis a welit er vaezienn-mañ.",
	'autocreatewiki-info-terms-agree' => 'Pa vez krouet ur wiki hag ur gont implijer ez asantit da <a href="http://www.wikia.com/wiki/Terms_of_use"> amplegadoù implijout Wiki</a>.',
	'autocreatewiki-info-staff-username' => '<b>Skipailh hepken:</b> an implijer spisaet a dremeno da ziazezer ar wiki.',
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => 'Aet eo Wikia dreist bevenn krouiñ ar wikioù nevez hiziv ($1).',
	'autocreatewiki-limit-creation' => "Aet oc'h dreist bevenn uhelañ ar c'hrouiñ wiki dindan 24 eurvezh ($1).",
	'autocreatewiki-empty-field' => 'Mar plij leunit an takad-mañ.',
	'autocreatewiki-bad-name' => 'An anv zo da bezañ skrivet gant lizherennoù bihan, hep esaouennoù hag hep arouezennoù dibar (evel $ hag @).',
	'autocreatewiki-invalid-wikiname' => "Ne c'haller ket skrivañ an anv gant arouezennoù dibar (evel \$ hag @) ha ne c'hall ket bezañ goullo.",
	'autocreatewiki-violate-policy' => 'Un anv zo er wiki-se a dorr hor politikerezh a-fet reiñ anvioù.',
	'autocreatewiki-name-taken' => 'Ur wiki a zo dija d\'ar chomlec\'h-se. Kemerit perzh war <a href="http://$1.wikia.com">http://$1.wikia.com</a> pe dibabit ur chomlec\'h all.',
	'autocreatewiki-name-too-short' => "Re verr eo ar chomlec'h, dibabit ur chomlec'h gant 3 araouezenn d'an nebeutañ.",
	'autocreatewiki-name-too-long' => "Re hir eo ar chomlec'h, dibabit ur chomlec'h gant 50 arouezenn d'ar muiañ.",
	'autocreatewiki-similar-wikis' => "Ur roll wikioù krouet war an hevelep danvez zo diskwelet amañ dindan. Kinnig a reomp deoc'h mont war unan anezho.",
	'autocreatewiki-invalid-username' => "N'eo ket mat an anv-implijer-mañ.",
	'autocreatewiki-busy-username' => 'Kemeret eo an anv implijer dija.',
	'autocreatewiki-blocked-username' => "Ne c'heloc'h ket krouiñ ur gont.",
	'autocreatewiki-user-notloggedin' => "Krouet eo bet ho kont met n'oc'h ket kevreet !",
	'autocreatewiki-empty-language' => 'Dibabit yezh ar wiki, mar plij.',
	'autocreatewiki-empty-category' => 'Mar plij dibabit ur rummad.',
	'autocreatewiki-empty-wikiname' => "Goullo ne c'hall ket bezañ anv ar wiki.",
	'autocreatewiki-empty-username' => "Goullo ne c'hall ket bezañ an anv implijer.",
	'autocreatewiki-empty-password' => "Ne c'hell ket bezañ goullo ar ger tremen",
	'autocreatewiki-empty-retype-password' => "Goullo ne c'hall ket ar ger-tremen adlakaet bezañ",
	'autocreatewiki-category-label' => 'Rummad :',
	'autocreatewiki-category-other' => 'All',
	'autocreatewiki-set-username' => 'Termenit an anv implijer da gentañ.',
	'autocreatewiki-invalid-category' => 'Talvoud direizh evit ar rummad. Dibabit un talvoud er roll, mar plij.',
	'autocreatewiki-invalid-language' => 'Yezh direizh evit ar rummad. Dibabit ur yezh er roll, mar plij.',
	'autocreatewiki-invalid-retype-passwd' => 'Skrivit ar ger-tremen amañ a-us, mar plij.',
	'autocreatewiki-invalid-birthday' => 'Deiziad ganedigezh direizh',
	'autocreatewiki-limit-birthday' => "Ne c'haller ket krouiñ an enrolladenn.",
	'autocreatewiki-log-title' => 'Emeur o krouiñ ho wiki',
	'autocreatewiki-step0' => 'Adderaouekaat...',
	'autocreatewiki-stepdefault' => 'An argerzh zo dindan seveniñ , gortozit...',
	'autocreatewiki-errordefault' => "N'eo ket echu an argerzh...",
	'autocreatewiki-step1' => 'Krouiñ renkell ar skeudennoù...',
	'autocreatewiki-step2' => 'O krouiñ an diaz roadennoù...',
	'autocreatewiki-step3' => 'Ouzhpennañ titouroù dre ziouer war an diaz roadennoù...',
	'autocreatewiki-step4' => 'Eilañ ar skeudennoù dre ziouer hag al logo...',
	'autocreatewiki-step5' => 'Ouzhpennañ argemmennoù dre ziouer an diaz roadennoù...',
	'autocreatewiki-step6' => 'Ouzhpennañ an taolennoù dre ziouer en diaz roadennoù...',
	'autocreatewiki-step7' => 'Ouzhpennañ diazoù evit ar yezh...',
	'autocreatewiki-step8' => 'Ouzhpennañ strolladoù implijerien ha rummadoù...',
	'autocreatewiki-step9' => 'Ouzhpennañ argemmennoù ar wiki nevez...',
	'autocreatewiki-step10' => 'Ouzhpennañ pajennoù er wiki kreiz...',
	'autocreatewiki-step11' => "Kas ar postel d'an implijer...",
	'autocreatewiki-redirect' => 'Adkas war-du ar wiki nevez : $1 ...',
	'autocreatewiki-congratulation' => "Gourc'hemennoù !",
	'autocreatewiki-welcometalk-log' => 'Kemennadenn Degemer',
	'autocreatewiki-regex-error-comment' => 'implijet er wiki $1 (skrid  klok : $2)',
	'autocreatewiki-step2-error' => "Bez' ez eus c'hoazh eus an diaz roadennoù-se !",
	'autocreatewiki-step3-error' => "Ne c'haller ket ouzhpennañ an titouroù dre ziouer en diaz roadennoù !",
	'autocreatewiki-step6-error' => "Ne c'haller ket ouzhpennañ an taolennoù dre ziouer en diaz roadennoù !",
	'autocreatewiki-step7-error' => "N'haller ket eilañ an diaz roadennoù diazez evit ar ar yezh-mañ !",
	'autocreatewiki-protect-reason' => 'Darn eus an etrefas ofisiel',
	'autocreatewiki-welcomesubject' => 'Krouet eo bet ar $1 !',
	'autocreatewiki-welcomebody' => "Demat, $2,

Ar Wikia zo bet savet ganeoc'h a gaver bremañ war <$1> Emichañs e kemerot perzh ennañ a-zevri evit e lakaat da vevañ !

Degaset hon eus un nebeud titouroù war ho pajenn gaozeal (<$5>) evit sikour ac'hanoc'h da gregiñ ganti.

M'hoc'h eus goulennoù c'hoazh e c'hallit goulenn sikour ouzh ar gumuniezh war ar wiki <http://www.wikia.com /wiki/Forum:Help_desk>, pe dre bostel d'ar chomlec'h community@wikia.com. Gallout a rit respont pe sellet ouzh hor pajennoù skoazell : <http://irc.wikia.com>.

Chañs vat deoc'h en ho raktres .


$3

Skipailh Kumuniezh Wikia

<http://www.wikia.com/wiki/User:$4>", # Fuzzy
	'autocreatewiki-welcometalk' => "== Degemer mat ! ==
<div style=\"font-size:120%; line-height:1.2em;\">Demat deoc'h \$1 -- lorc'h zo ennomp oc'h herberc'hiañ ho lec'hienn '''\$4''' er gumuniezh  Wiki!

Bremañ ho peus ul lec'hienn Genrouedad a vo ret kargañ gant titouroù, skeudennoù ha videoioù. Goullo eo  bremañ avat ha gortoz a ra ac'hanout... Aon ho peus rak se ? Setu un nebeud alioù evit kregiñ mat ganti.

* '''Deskrivit' an danvez''' war ar bajenn zegemer. Gant se e c'hallit displegañ d'ho lennerien peseurt danvezioù a blij deoc'h ar gwellañ. Skrivit kement tra ho peus c'hoant ! Gallout a rit krouiñ liammoù en ho teskrivadur war-du holl bajennoù pouezus ho wiki.

* '''Boulc'hit un nebeud pajennoù''' --  gant un nebeud frazennoù hepken evit kregiñ ganti. Na lezit pajenn wenn ebet ! Graet eo ur wiki ivez evit ouzhpennañ  skeudennoù ha videoioù, evit klokaat ar pajennoù ha lakaat anezho da vezañ dedennusoc'h.

Ha kendalc'hit goude ! Plijout a ra d'an dud mont war ar wikioù ma vez traoù da lenn, kendalc'hit neuze da skrivañ warno evit dedennañ al lennerien hag an embannerien. Kalz a draoù a chom d'ober -- ne rit ket biloù -- hiziv emañ an deiz kentañ, ha kalz amzer ho peus evit en ober. An holl wikioù zo bet krouet deiz pe zeiz -- ur pennad amzer zo ezhomm evit kregiñ da skrivañ un nebeud pajennoù, betek dont da vezañ ul lec'hienn vras

M'ho peus goulennoù da sevel e c'hallit skrivañ ur gerig dimp war ar bajenn  [[Special:Contact|contact form]]-mañ. Hetiñ a reomp kalz a blijadur deoc'h !

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Wikioù nevez',
	'newwikisstart' => 'Diskouez ar Wikioù adal :',
	'autocreatewiki-reminder-body' => "$1 ker :

Plijet omp o c'houzout hoc'h eus da sevel ho wiki nevez, {{SITENAME}} ! Gourc'hemennoù ! Gallout a rit distreiñ warni hag ouzhpennañ traoù all war ho wiki en ur weladenniñ $2.

Ur raktres nevez-flamm an hini eo. Skrivit dimp, mar plij, m'hoc'h eus tra goulenn pe c'houlenn !

-- Skipailh ar gumuniezh Wikia",
	'autocreatewiki-reminder-body-HTML' => "<p>$1 ker :</p>

<p>Plijet omp o c'houzout hoc'h eus kroget da sevel ho wiki nevez, {{SITENAME}} ! Gourc'hemennoù ! Gallout a rit distreiñ warni hag ouzhpennañ traoù all war ho wiki en ur weladenniñ $2.</a>.</p>

<p>Ur raktres nevez-flamm an hini eo. Skrivit dimp, mar plij, m'hoc'h eus tra goulenn pe c'houlenn !</p>

</p>-- Skipailh ar gumuniezh Wikia</p>",
	'autocreatewiki-subname-answers' => 'Respontoù',
);

/** Sorani Kurdish (کوردی)
 */
$messages['ckb'] = array(
	'autocreatewiki' => 'ویکییەکی نوێ دروست بکە',
	'autocreatewiki-page-title-default' => 'دروستکردنی ویکییەکی نوێ',
	'autocreatewiki-category-select' => 'یەکێک ھەڵبژێرە',
	'autocreatewiki-language-top' => '$1 زمانی سەرتر',
	'autocreatewiki-language-all' => 'گشت زمانەکان',
	'autocreatewiki-birthdate' => 'ڕێکەوتی لەدایکبوون:',
	'autocreatewiki-log-title' => 'ویکییەکەت خەریکە دروست‌دەبێ',
	'autocreatewiki-welcometalk-log' => 'پەیامی بەخێرھاتن',
);

/** Czech (česky)
 * @author Chmee2
 * @author Jezevec
 * @author Jkjk
 * @author Reaperman
 * @author Vks
 */
$messages['cs'] = array(
	'autocreatewiki' => 'Vytvořit novou wiki',
	'autocreatewiki-desc' => 'Vytvořit wiki podle požadavků uživatelů s pomocí WikiFactory',
	'autocreatewiki-page-title-default' => 'Vytvořit novou wiki',
	'autocreatewiki-page-title-answers' => 'Vytvořit nový web s odpověďmi',
	'createwiki' => 'Vytvořit novou wiki',
	'autocreatewiki-chooseone' => 'Vyberte jednu možnost',
	'autocreatewiki-required' => '$1= požadováno',
	'autocreatewiki-web-address' => 'Internetová adresa (URL):',
	'autocreatewiki-category-select' => 'Vyberte jednu možnost',
	'autocreatewiki-language-top' => '$1 největších jazyků',
	'autocreatewiki-language-all' => 'Všechny jazyky',
	'autocreatewiki-birthdate' => 'Datum narození:',
	'autocreatewiki-blurry-word' => 'Rozmazané slovo:',
	'autocreatewiki-remember' => 'Pamatuj si mě',
	'autocreatewiki-create-account' => 'Založit účet',
	'autocreatewiki-done' => 'hotovo',
	'autocreatewiki-error' => 'chyba',
	'autocreatewiki-haveaccount-question' => 'Máte již Wikia účet?',
	'autocreatewiki-success-title-default' => 'Vaše wiki byla vytvořena!',
	'autocreatewiki-success-title-answers' => 'Vaše web s odpověďmi byl vytvořen!',
	'autocreatewiki-success-subtitle' => 'Teď můžete začít pracovat na své wiki na adrese:',
	'autocreatewiki-success-has-been-created' => 'byl vytvořen!',
	'autocreatewiki-success-get-started' => 'Začínáme',
	'autocreatewiki-info-topic' => 'Přidejte krátký popis, například "Star Wars" nebo "Televizní seriály".',
	'autocreatewiki-info-category-default' => 'To pomůže návštěvníkům najít vaší wiki.',
	'autocreatewiki-info-language' => 'To bude výchozí jazyk pro návštěvníky vaší wiki.',
	'autocreatewiki-info-email-address' => 'Vaše e-mailová adresa se nikdy nikomu na Wikia nezobrazuje.',
	'autocreatewiki-info-birthdate' => 'Wikia vyžaduje od všech uživatelů datum jejich narození z bezpečnostních důvodu a jako prostředek k zachování integrity webu v souladu se zákony.', # Fuzzy
	'autocreatewiki-info-blurry-word' => 'Z důvodu ochrany před strojovým zakládáním účtů napiště slovo, které vidíte rozmazané v tomto poli.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-empty-field' => 'Vyplňte, prosím, toto pole.',
	'autocreatewiki-bad-name' => 'Název nesmí obsahovat speciální znaky (jako $ nebo @) a musí to být jedno slovo malými písmeny bez mezer.',
	'autocreatewiki-invalid-wikiname' => 'Název nesmí obsahovat speciální znaky (jako $ nebo @) a nemůže být prázdný.',
	'autocreatewiki-violate-policy' => 'Tato wiki obsahuje v názvu slovo, které porušuje naše pravidla pojmenovávání',
	'autocreatewiki-name-taken' => 'Wiki s touto adresou již existuje. Začněte upravovat na <a href="http://<span class=" notranslate"="">$1.wikia.com">http:// $1 . wikia.com</a> , nebo zvolte jinou adresu.',
	'autocreatewiki-name-too-short' => 'Tato adresa je příliš krátká, vyberte adresu s nejméně 3 znaky.',
	'autocreatewiki-name-too-long' => 'Tato adresa je příliš dlouhá. Zvolte prosím adresu s maximálně 50 znaky.',
	'autocreatewiki-invalid-username' => 'Toto uživatelské jméno je neplatné.',
	'autocreatewiki-busy-username' => 'Toto uživatelské jméno je již obsazené.',
	'autocreatewiki-blocked-username' => 'Nemůžete vytvořit účet.',
	'autocreatewiki-user-notloggedin' => 'Váš účet byl vytvořen, ale nejste přihlášeni.',
	'autocreatewiki-empty-language' => 'Prosím, vyberte jazyk pro wiki.',
	'autocreatewiki-empty-category' => 'Prosím, vyberte kategorii.',
	'autocreatewiki-empty-wikiname' => 'Jméno wiki nemůže být prázdné.',
	'autocreatewiki-empty-username' => 'Přihlašovací jméno nemůže být prázdné.',
	'autocreatewiki-empty-password' => 'Heslo nemůže být prázdné.',
	'autocreatewiki-empty-retype-password' => 'Zopakování hesla nemůže být prázdné.',
	'autocreatewiki-category-label' => 'Kategorie:',
	'autocreatewiki-category-other' => 'Jiné',
	'autocreatewiki-set-username' => 'Nejprve zvolte uživatelské jméno.',
	'autocreatewiki-invalid-category' => 'Neplatný výběr kategorie.
Prosím, vyberte hodnotu ze seznamu.',
	'autocreatewiki-invalid-language' => 'Neplatný výběr jazyka.
Prosím, vyberte hodnotu ze seznamu.',
	'autocreatewiki-invalid-retype-passwd' => 'Prosím, zopakujte stejné heslo',
	'autocreatewiki-invalid-birthday' => 'Neplatné datum narození',
	'autocreatewiki-limit-birthday' => 'Není možné dokončit registraci.',
	'autocreatewiki-log-title' => 'Vaše wiki se právě vytváří',
	'autocreatewiki-step0' => 'Probíha inicializace ...',
	'autocreatewiki-stepdefault' => 'Proces probíhá, prosím čekejte ...',
	'autocreatewiki-errordefault' => 'Proces nebyl dokončen ...',
	'autocreatewiki-step1' => 'Vytváření složky pro obrázky ...',
	'autocreatewiki-step2' => 'Vytváření databáze ...',
	'autocreatewiki-step3' => 'Nastavování výchozích informací v databázi ...',
	'autocreatewiki-step4' => 'Přenos výchozích obrázků a loga ...',
	'autocreatewiki-step5' => 'Nastavování výchozích proměnných v databázi ...',
	'autocreatewiki-step6' => 'Vytváření tabulek v databázi ...',
	'autocreatewiki-step7' => 'Nastavit počáteční hodnotu pro daný jazyk ...',
	'autocreatewiki-step11' => 'Odesílání e-mailu uživateli ...',
	'autocreatewiki-redirect' => 'Přesměrování na novou wiki: $1  ...',
	'autocreatewiki-congratulation' => 'Blahopřejeme!',
	'autocreatewiki-welcometalk-log' => 'Uvítací zpráva',
	'autocreatewiki-regex-error-comment' => 'použito na wiki $1 (celý text: $2)',
	'autocreatewiki-step2-error' => 'Databáze existuje!',
	'autocreatewiki-step3-error' => 'Nelze nastavit výchozí informace v databázi!',
	'autocreatewiki-step6-error' => 'Nelze nastavit výchozí tabulky v databázi!',
	'autocreatewiki-protect-reason' => 'Součást oficiálního rozhraní',
	'autocreatewiki-welcomesubject' => '$1 bylo vytvořeno!',
	'newwikis' => 'Nová wiki',
	'newwikisstart' => 'Zobrazit wiki založené od:',
	'autocreatewiki-subname-answers' => 'Odpovědi',
);

/** Welsh (Cymraeg)
 * @author Pwyll
 */
$messages['cy'] = array(
	'autocreatewiki' => 'Creu wiki newydd',
);

/** German (Deutsch)
 * @author Claudia Hattitten
 * @author LWChris
 * @author Metalhead64
 * @author PtM
 * @author The Evil IP address
 */
$messages['de'] = array(
	'autocreatewiki' => 'Erstelle ein neues Wiki',
	'autocreatewiki-desc' => 'Erzeugt ein Wiki in WikiFactory nach Benutzeranforderungen',
	'autocreatewiki-page-title-default' => 'Erstelle ein neues Wiki',
	'autocreatewiki-page-title-answers' => 'Eine neue Frage-Antwort-Site erstellen',
	'createwiki' => 'Neues Wiki erstellen',
	'autocreatewiki-chooseone' => 'Bitte wählen',
	'autocreatewiki-required' => '$1 = notwendige Angabe',
	'autocreatewiki-web-address' => 'Web-Adresse:',
	'autocreatewiki-category-select' => 'Bitte wählen',
	'autocreatewiki-language-top' => 'Top-$1 Sprachen',
	'autocreatewiki-language-all' => 'Alle Sprachen',
	'autocreatewiki-birthdate' => 'Geburtsdatum:',
	'autocreatewiki-blurry-word' => 'Spam-Schutz:',
	'autocreatewiki-remember' => 'Dauerhaft anmelden',
	'autocreatewiki-create-account' => 'Benutzerkonto erstellen',
	'autocreatewiki-done' => 'Fertig',
	'autocreatewiki-error' => 'Fehler',
	'autocreatewiki-haveaccount-question' => 'Hast du bereits ein Benutzerkonto bei Wikia?',
	'autocreatewiki-success-title-default' => 'Dein Wiki wurde erstellt!',
	'autocreatewiki-success-title-answers' => 'Deine Frage-Antwort-Site wurde erstellt!',
	'autocreatewiki-success-subtitle' => 'Du kannst sofort in deinem Wiki loslegen - besuche einfach:',
	'autocreatewiki-success-has-been-created' => 'wurde erstellt!',
	'autocreatewiki-success-get-started' => 'Auf gehts!',
	'autocreatewiki-info-domain' => 'Verwende am besten ein Wort, das vermutlich als Suchbegriff für dieses Thema verwendet wird.',
	'autocreatewiki-info-topic' => 'Wähle am besten einen kurzen, beschreibenden Namen (z. B. „Star Wars“ oder „Fernsehserien“).',
	'autocreatewiki-info-category-default' => 'Besucher können so dein Wiki einfacher finden.',
	'autocreatewiki-info-category-answers' => 'Besucher können so deine Frage-Antwort-Site einfacher finden.',
	'autocreatewiki-info-language' => 'Dies wird die Standard-Sprache für Besucher deines Wikis.',
	'autocreatewiki-info-email-address' => 'Deine E-Mail-Adresse wird niemandem angezeigt.',
	'autocreatewiki-info-realname' => 'Damit kann dein bürgerlicher Name deinen Beiträgen zugeordnet werden.',
	'autocreatewiki-info-birthdate' => 'Wikia verlangt von allen Nutzern, ihr wahres Geburtsdatum anzugeben, sowohl als Sicherheitsmaßnahme, als auch als Mittel zur Wahrung der Integrität der Website unter Einhaltung der behördlichen Vorschriften.',
	'autocreatewiki-info-blurry-word' => 'Um die automatische Erstellung von Benutzerkonten zu verhindern, tippe bitte das verschwommene Wort ein.',
	'autocreatewiki-info-terms-agree' => 'Mit Erstellung eines Wikis und eines Benutzerkontos stimmst du Wikias <a href="http://www.wikia.com/wiki/Terms_of_use">Nutzungsbedingungen</a> zu.',
	'autocreatewiki-info-staff-username' => '<b>Nur für Mitarbeiter:</b> Der angegebene Benutzer wird als Gründer aufgeführt.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Wikia hat die maximale Anzahl von Wiki-Erstellungen für heute überschritten ($1).',
	'autocreatewiki-limit-creation' => 'Du hast die maximale Anzahl an Wikis überschritten, die in 24 Stunden erstellt werden können ($1).',
	'autocreatewiki-empty-field' => 'Fülle bitte dieses Feld aus.',
	'autocreatewiki-bad-name' => 'Der Name darf keine Sonderzeichen (wie $ oder @) enthalten und muss ein einzelnes Wort in Kleinbuchstaben ohne Leerzeichen sein.',
	'autocreatewiki-invalid-wikiname' => 'Der Name darf keine Sonderzeichen (wie $ oder @) enthalten und darf nicht leer sein',
	'autocreatewiki-violate-policy' => 'Im Wiki-Namen ist ein Wort enthalten, dass unseren Namens-Regeln nicht entspricht',
	'autocreatewiki-name-taken' => 'Es gibt bereits ein Wiki mit dieser Adresse. Beteilige dich unter <a href="http://$1.wikia.com">http://$1.wikia.com</a> oder wähle eine andere Adresse.',
	'autocreatewiki-name-too-short' => 'Diese Adresse ist zu kurz, bitte eine Adresse mit mindestens 3 Buchstaben wählen.',
	'autocreatewiki-name-too-long' => 'Diese Adresse ist zu lang. Bitte eine Adresse mit maximal 50 Zeichen wählen.',
	'autocreatewiki-similar-wikis' => 'Unten sind die Wikis zu diesem Thema, die bereits erstellt wurden. Wir schlagen vor, dass du dich dort beteiligst.',
	'autocreatewiki-invalid-username' => 'Dieser Benutzername ist ungültig.',
	'autocreatewiki-busy-username' => 'Dieser Benutzername existiert bereits.',
	'autocreatewiki-blocked-username' => 'Du darfst kein Benutzerkonto anlegen.',
	'autocreatewiki-user-notloggedin' => 'Dein Konto wurde erstellt aber nicht eingeloggt!',
	'autocreatewiki-empty-language' => 'Wähle bitte eine Sprache für dein Wiki.',
	'autocreatewiki-empty-category' => 'Bitte wähle eine Kategorie.',
	'autocreatewiki-empty-wikiname' => 'Bitte gib deinem Wiki einen Namen.',
	'autocreatewiki-empty-username' => 'Bitte gib einen Benutzernamen an.',
	'autocreatewiki-empty-password' => 'Das Passwort darf nicht leer sein.',
	'autocreatewiki-empty-retype-password' => 'Das Passwort darf nicht leer sein.',
	'autocreatewiki-category-label' => 'Kategorie:',
	'autocreatewiki-category-other' => 'Andere',
	'autocreatewiki-set-username' => 'Wähle zuerst einen Benutzernamen.',
	'autocreatewiki-invalid-category' => 'Ungültige Kategorie-Auswahl.
Bitte wähle eine Kategorie aus der Liste.',
	'autocreatewiki-invalid-language' => 'Ungültige Sprach-Auswahl.
Bitte wähle eine Sprache aus der Liste.',
	'autocreatewiki-invalid-retype-passwd' => 'Bitte gib das gleiche Passwort wie oben ein',
	'autocreatewiki-invalid-birthday' => 'Ungültiges Geburtsdatum',
	'autocreatewiki-limit-birthday' => 'Eine Registrierung ist nicht möglich - wende dich bitte an Wikia.',
	'autocreatewiki-log-title' => 'Dein Wiki wird erstellt',
	'autocreatewiki-step0' => 'Initialisiere Prozess ...',
	'autocreatewiki-stepdefault' => 'Prozess läuft, bitte warten ...',
	'autocreatewiki-errordefault' => 'Der Prozess wurde nicht beendet ...',
	'autocreatewiki-step1' => 'Erstelle Bilder-Ordner ...',
	'autocreatewiki-step2' => 'Erstelle Datenbank ...',
	'autocreatewiki-step3' => 'Initialisiere Datenbank-Informationen ...',
	'autocreatewiki-step4' => 'Übertrage Logo und Standard-Bilder ...',
	'autocreatewiki-step5' => 'Initialisiere Datenbank-Variablen ...',
	'autocreatewiki-step6' => 'Initialisiere Datenbank-Tabellen ...',
	'autocreatewiki-step7' => 'Übertrage Sprach-Basisversion ...',
	'autocreatewiki-step8' => 'Erstelle Benutzer-Gruppen und Kategorien ...',
	'autocreatewiki-step9' => 'Anpassung der Variablen ...',
	'autocreatewiki-step10' => 'Erstelle Seiten im Zentral-Wikia ...',
	'autocreatewiki-step11' => 'Sende E-Mail an Benutzer ...',
	'autocreatewiki-redirect' => 'Weiterleitung zum neuen Wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Glückwunsch!',
	'autocreatewiki-welcometalk-log' => 'Willkommensnachricht',
	'autocreatewiki-regex-error-comment' => 'verwendet in Wiki $1 (ganzer Text: $2)',
	'autocreatewiki-step2-error' => 'Datenbank existiert bereits!',
	'autocreatewiki-step3-error' => 'Initialisierung der Datenbank-Informationen fehlgeschlagen!',
	'autocreatewiki-step6-error' => 'Initialisierung der Datenbank-Tabellen fehlgeschlagen!',
	'autocreatewiki-step7-error' => 'Fehler beim Übertragen der Sprach-Basisversion!',
	'autocreatewiki-protect-reason' => 'Teil der offiziellen Oberfläche',
	'autocreatewiki-welcomesubject' => '$1 wurde erstellt!',
	'autocreatewiki-welcomebody' => 'Hallo $2,

das von dir erstellte Wiki ist nun unter <$1> erreichbar.

Bereit loszulegen? Wir haben auf deiner Diskussionsseite (<$5>) ein paar Links hinterlassen, die dir für den Anfang helfen sollen und dich hoffentlich ermutigen, die Hilfen zu Wikia in Anspruch zu nehmen. Falls du mal eine Frage hast oder nicht weiter weißt, dann antworte auf diese E-Mail oder schau dir die Hilfeseiten durch <http://hilfe.wikia.com>.

Du kannst auch im Gründer- und Administratoren-Blog lesen <http://de.community.wikia.com/wiki/Blog:Gr%C3%BCnder_und_Administratoren>, wie auch im Wikia-Deutschland-News-Blog <http://de.community.wikia.com/wiki/Blog:Wikia_Deutschland_News>. Dort wirst du Tips und Tricks, Infos über neue Funktionen und Neuigkeiten rund um Wikia vorfinden.

Viel Spaß beim Schreiben!

$3
Wikia Community Team
<http://de.community.wikia.com/wiki/User:$4>

___________________________________________
* Wenn du weniger Nachrichten von uns erhalten möchtest, so kannst du dort deine E-Mail-Einstellungen ändern: http://de.community.wikia.com/Spezial:Einstellungen',
	'autocreatewiki-welcometalk-wall-title' => 'Willkommen!',
	'autocreatewiki-welcometalk-wall' => 'Hallo!
Wir freuen uns, dass {{subst:SITENAME}} jetzt Teil der Wikia-Gemeinschaft ist! Es gibt noch Einiges zu tun, deshalb hier nun als Hilfe ein paar Tips und Links, um dein Wiki zum Laufen zu bringen:
* Du weißt nicht, womit du anfangen sollst? Schau im [[w:c:community:Admin_Central:Main_Page|Gründer- und Adminbereich]] vorbei und lies im [[w:c:community:Blog:Wikia_Founders_&_Admins|Blog]], wie du deinem Wiki eine Starthilfe geben und es wachsen lassen kannst!
*Besuche [[w:c:community:main page|die Wikia Community Deutschland]], um Freundschaften im [[w:c:community:Special:Chat|Chat]] zu schließen, neue Features kennenzulernen, und Wikias Nachrichten und Ankündigungen im [[w:c:community:Blog:Wikia_Staff_Blog|offiziellen Blog]] mitzukriegen.
*Schau zu unseren [[w:c:community:Webinars|Webseminaren]], wo du dich registrieren, mit den Wikia-Mitarbeitern interagieren und deine letzten Sitzungen ansehen kannst.
*Schau dir auf alle Fälle mal bei den [[Special:WikiFeatures|Wiki-Funktionen]] an, welche Erweiterungen du in deinem Wiki aktivieren kannst!
*Besuche unser [[w:c:community:Admin_Central:Forum|Forum]] im Gründer- und Adminbereich und lies Fragen, die andere Wiki-Administratoren haben.
*Zu guter Letzt: Durchsuche unsere [[w:c:community:Help:Contents|Hilfeseiten]], die dir so manche deiner Fragen beantworten können.
Alle diese Links sind gute Stellen, um Wikia kennenzulernen. Falls du irgendwann nicht weiter weißt oder keine Antwort auf deine Frage findest, dann setz dich mit uns [[Special:Contact|über diese Seite]] in Verbindung. Aber vor allem viel Spaß!
Frohes Schaffen!',
	'autocreatewiki-welcometalk' => "== Willkommen! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hi \$1 -- wir freuen uns, dass '''\$4''' jetzt Teil der Wikia-Gemeinschaft ist!

Jetzt hast du eine ganze Webseite, die du mit Informationen, Bildern und Videos über dein Lieblingsthema füllen kannst. Aber im Moment gibt es nur leere Seiten, die dich anstarren... Gruselig, nicht wahr? Hier einige Anregungen, wie du anfangen kannst.

* '''Stelle dein Thema vor''' - auf der Hauptseite. Diese Seite ist deine Chance, den Lesern alles über dein Thema zu verraten. Schreib so viel du willst! Deine Beschreibung kann zu allen wichtigen Seiten im Wiki verlinken.

* '''Erstelle einige neue Seiten''' - nur ein oder zwei Sätze um anzufangen. Lass dich nicht von den leeren Seiten unterkriegen! In einem Wiki werden laufend Dinge hinzugefügt oder verändert. Du kannst auch Bilder und Videos auf die Hauptseite packen um sie zu füllen und interessanter zu machen.

Und im Anschluss mach einfach weiter! Leute mögen große Wikis, in denen man viel entdecken kann. Also füg weiterhin Inhalte hinzu, und du wirst neue Leser und Benutzer anziehen. Es gibt viel zu tun, aber sei unbesorgt - heute ist dein erster Tag, und du hast genügend Zeit. Jedes Wiki fängt auf dieselbe Weise an - es braucht nur ein bisschen Zeit, und nach den ersten paar Seiten, und einer Weile wird das Wiki zu einer großen, häufig besuchten Seite anwachsen.

Wenn du Fragen hast, kannst du uns eine Mail über unser [[Special:Contact|Kontaktformular]] schreiben. Viel Spaß!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Neue Wikis',
	'newwikisstart' => 'Zeige Wikis ab:',
	'autocreatewiki-reminder-body' => 'Hallo $1,

Herzlichen Glückwunsch zu deinem neuen Wiki, {{SITENAME}}! Du kannst zurückkommen und mehr zu deinem Wiki hinzufügen indem du $2 besuchst.

Dies ist ein brandneues Projekt, wenn du also Fragen hast, lass sie uns wissen!


-- Wikia Community Team',
	'autocreatewiki-reminder-body-HTML' => '<p>Hallo $1,</p>

<p>Herzlichen Glückwunsch zu deinem neuen Wiki, {{SITENAME}}! Du kannst zurückkommen und mehr zu deinem Wiki hinzufügen
indem du <a href="$2">$2</a> besuchst.</p>

<p>Dies ist ein brandneues Projekt, wenn du also Fragen hast, lass sie uns wissen!</p>

<p>-- Wikia Community Team</p>',
	'autocreatewiki-subname-answers' => 'Fragen',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Claudia Hattitten
 * @author LWChris
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'autocreatewiki' => 'Ein neues Wiki erstellen',
	'autocreatewiki-page-title-default' => 'Ein neues Wiki erstellen',
	'autocreatewiki-haveaccount-question' => 'Haben Sie bereits ein Benutzerkonto bei Wikia?',
	'autocreatewiki-success-title-default' => 'Ihr Wiki wurde erstellt!',
	'autocreatewiki-success-title-answers' => 'Ihre Frage-Antwort-Site wurde erstellt.',
	'autocreatewiki-success-subtitle' => 'Sie können sofort in Ihrem Wiki loslegen - besuchen Sie einfach:',
	'autocreatewiki-info-domain' => 'Verwenden Sie am besten ein Wort, das vermutlich als Suchbegriff für dieses Thema verwendet wird.',
	'autocreatewiki-info-topic' => 'Wählen Sie am besten einen kurzen, beschreibenden Namen (z. B. „Star Wars“ oder „Fernsehserien“).',
	'autocreatewiki-info-category-default' => 'Besucher können so Ihr Wiki einfacher finden.',
	'autocreatewiki-info-category-answers' => 'Besucher können so Ihre Frage-Antwort-Site einfacher finden.',
	'autocreatewiki-info-language' => 'Dies wird die Standard-Sprache für Besucher Ihres Wikis.',
	'autocreatewiki-info-email-address' => 'Ihre E-Mail-Adresse wird niemandem angezeigt.',
	'autocreatewiki-info-realname' => 'Damit kann Ihr bürgerlicher Name Ihren Beiträgen zugeordnet werden.',
	'autocreatewiki-info-blurry-word' => 'Um die automatische Erstellung von Benutzerkonten zu verhindern, geben Sie bitte das verschwommene Wort ein.',
	'autocreatewiki-info-terms-agree' => 'Mit Erstellung eines Wikis und eines Benutzerkontos stimmen Sie Wikias <a href="http://www.wikia.com/wiki/Terms_of_use">Nutzungsbedingungen</a> zu.',
	'autocreatewiki-limit-creation' => 'Sie haben die maximale Anzahl an Wikis überschritten, die in 24 Stunden erstellt werden können ($1).',
	'autocreatewiki-empty-field' => 'Füllen Sie bitte dieses Feld aus.',
	'autocreatewiki-name-taken' => 'Ein Wiki mit dieser Adresse existiert bereits. Werden Sie unter <a href="http://$1.wikia.com">http://$1.wikia.com</a> aktiv oder wählen sie eine andere Adresse.',
	'autocreatewiki-name-too-short' => 'Diese Adresse ist zu kurz, bitte wählen Sie eine Adresse mit mindestens 3 Buchstaben.',
	'autocreatewiki-name-too-long' => 'Diese Adresse ist zu lang. Bitte wählen Sie eine Adresse mit maximal 50 Zeichen.',
	'autocreatewiki-similar-wikis' => 'Unten sind die Wikis zu diesem Thema, die bereits erstellt wurden. Wir schlagen vor, dass Sie sich dort beteiligen.',
	'autocreatewiki-blocked-username' => 'Sie dürfen kein Benutzerkonto anlegen.',
	'autocreatewiki-user-notloggedin' => 'Ihr Konto wurde erstellt aber nicht eingeloggt!',
	'autocreatewiki-empty-language' => 'Wählen Sie bitte eine Sprache für Ihr Wiki.',
	'autocreatewiki-empty-category' => 'Bitte wählen Sie eine Kategorie.',
	'autocreatewiki-empty-wikiname' => 'Bitte geben Sie Ihrem Wiki einen Namen.',
	'autocreatewiki-empty-username' => 'Bitte geben Sie einen Benutzernamen an.',
	'autocreatewiki-set-username' => 'Wählen Sie zuerst einen Benutzernamen.',
	'autocreatewiki-invalid-category' => 'Ungültige Kategorie-Auswahl.
Bitte wählen Sie eine Kategorie aus der Liste.',
	'autocreatewiki-invalid-language' => 'Ungültige Sprach-Auswahl.
Bitte wählen Sie eine Sprache aus der Liste.',
	'autocreatewiki-invalid-retype-passwd' => 'Bitte geben Sie das gleiche Passwort wie oben ein',
	'autocreatewiki-limit-birthday' => 'Eine Registrierung ist nicht möglich - wenden Sie sich bitte an Wikia.',
	'autocreatewiki-log-title' => 'Ihr Wiki wird erstellt',
	'autocreatewiki-welcomebody' => 'Hallo $2,

Das von Ihnen erstellte Wikia ist nun unter <$1> erreichbar. Hoffentlich sehen wir Sie bald dort editieren!

Wir haben auf Ihrer Diskussionsseite (<$5>) ein paar Informationen und Tipps für den Start hinterlassen.

Falls Sie irgendwelche Probleme haben, können Sie unter <http://de.wikia.com/wiki/Forum:Übersicht> die Gemeinschaft um Hilfe bitten oder sich per E-Mail an community@wikia.com wenden. Sie können auch unseren #wikia IRC-Channel besuchen <http://irc.wikia.com>.

Falls Sie noch weitere Fragen oder Probleme haben, können Sie sich auch direkt per Mail oder Diskussionsseite an mich wenden.

Viel Erfolg mit Ihrem Projekt!

$3

Wikia Community Team

<http://de.wikia.com/wiki/User:$4>', # Fuzzy
	'autocreatewiki-welcometalk' => "== Willkommen! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hallo \$1 -- wir freuen uns, dass '''\$4''' jetzt Teil der Wikia-Gemeinschaft ist!

Jetzt haben Sie eine ganze Webseite, die Sie mit Informationen, Bildern und Videos über dein Lieblingsthema füllen können. Aber im Moment gibt es nur leere Seiten... Unheimlich? Hier einige Anregungen, wie Sie anfangen können.

* '''Stellen Sie Ihr Thema vor''' - auf der Hauptseite. Diese Seite ist Ihre Chance, den Lesern alles über Ihr Thema zu verraten. Schreiben Sie so viel Sie wollen! Ihre Beschreibung kann zu allen wichtigen Seiten im Wiki verlinken.

* '''Erstellen Sie einige neue Seiten''' - nur ein oder zwei Sätze um anzufangen. Lassen Sie sich nicht von den leeren Seiten unterkriegen! In einem Wiki werden laufend Dinge hinzugefügt oder verändert. Sie können auch Bilder und Videos auf die Hauptseite packen um sie zu füllen und interessanter zu machen.

Machen Sie im Anschluss einfach weiter! Leute mögen große Wikis, in denen man viel entdecken kann. Fügen Sie also weiterhin Inhalte hinzu, und Sie werden schon bald neue Leser und Benutzer anziehen. Es gibt viel zu tun, aber seien Sie unbesorgt - heute ist Ihr erster Tag, und Sie haben genügend Zeit. Jedes Wiki fängt auf dieselbe Weise an - es braucht nur ein bisschen Zeit, und nach den ersten paar Seiten, und einer Weile wird das Wiki zu einer großen, häufig besuchten Seite anwachsen.

Wenn Sie Fragen haben, können Sie uns eine Mail über unser [[Special:Contact|Kontaktformular]] schreiben. Viel Spaß!

-- [[User:\$2|\$3]] <staff /></div>",
	'autocreatewiki-reminder-body' => 'Hallo $1,

Herzlichen Glückwunsch zu Ihrem neuen Wiki, {{SITENAME}}! Sie können zurückkommen und mehr zu Ihrem Wiki hinzufügen indem Sie $2 besuchen.

Dies ist ein ganz neues Projekt, wenn Sie also Fragen haben, lassen Sie sie uns wissen!


-- Ihr Wikia Community Team',
	'autocreatewiki-reminder-body-HTML' => '<p>Hallo $1,</p>

<p>Herzlichen Glückwunsch zu Ihrem neuen Wiki, {{SITENAME}}! Sie können zurückkommen und mehr zu Ihrem Wiki hinzufügen
indem Sie <a href="$2">$2</a> besuchen.</p>

<p>Dies ist ein ganz neues Projekt, wenn Sie also Fragen haben, lassen Sie sie uns wissen!</p>

<p>-- Ihr Wikia Community Team</p>',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'autocreatewiki' => 'Wikiya newi vıraze',
	'autocreatewiki-desc' => 'Wikifebrika vıraştışire Qarqer buwaze',
	'autocreatewiki-page-title-default' => 'Wikiya newi vıraze',
	'autocreatewiki-page-title-answers' => 'yew siteya newiyaqande cewaba vıraze',
	'createwiki' => 'Wikiya newi vıraze',
	'autocreatewiki-chooseone' => 'zeweri bıweçine',
	'autocreatewiki-required' => '$1 = icab keno',
	'autocreatewiki-web-address' => 'Adrese webi',
	'autocreatewiki-category-select' => 'Yeweri weçine',
	'autocreatewiki-language-top' => 'Top $1 zıwani',
	'autocreatewiki-language-all' => 'Zıwani pêro',
	'autocreatewiki-birthdate' => 'Demê biyayışi:',
	'autocreatewiki-remember' => 'Mı biya xo viri',
	'autocreatewiki-create-account' => 'Yew hesab vıraze',
	'autocreatewiki-done' => 'Vırazi ya',
	'autocreatewiki-error' => 'Xırab',
	'autocreatewiki-success-has-been-created' => 'vıraşt',
	'autocreatewiki-success-get-started' => 'Şı rê dest pêkerê',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-invalid-username' => 'No namey qarqeri çıno',
	'autocreatewiki-busy-username' => 'No namey karberi  veror dı jew na merdumi groto',
	'autocreatewiki-blocked-username' => 'Şıma nêşenê hesab vırazê.',
	'autocreatewiki-empty-category' => 'Kategoriye weçine.',
	'autocreatewiki-category-label' => 'Kategoriye:',
	'autocreatewiki-category-other' => 'Zewmi',
	'autocreatewiki-step1' => 'Rateya resimana vırazêna ...',
	'autocreatewiki-step2' => 'Databaseo vırazêno ...',
	'autocreatewiki-redirect' => 'Wikiya newi açarnê: $1 ...',
	'autocreatewiki-welcometalk-log' => 'Mesacê Xeyr Amyayışi',
	'autocreatewiki-welcomesubject' => '$1 vıraziya!',
	'newwikis' => 'Wikiyo newe',
	'autocreatewiki-subname-answers' => 'cewab',
);

/** Ewe (eʋegbe)
 */
$messages['ee'] = array(
	'autocreatewiki-create-account' => 'Ŋlɔ ŋkɔ daɖi',
);

/** Greek (Ελληνικά)
 * @author Crazymadlover
 * @author Evropi
 * @author Geraki
 * @author Περίεργος
 */
$messages['el'] = array(
	'autocreatewiki' => 'Δημιουργήστε έναν νέο ιστότοπο τύπου Wiki',
	'autocreatewiki-desc' => 'Δημιουργήστε έναν ιστότοπο τύπου wiki στο WikiFactory από αιτήματα χρηστών',
	'autocreatewiki-page-title-default' => 'Δημιουργήστε έναν καινούργιο ιστότοπο τύπου Wiki',
	'createwiki' => 'Δημιουργήστε έναν ιστότοπο τύπου Wiki',
	'autocreatewiki-chooseone' => 'Διαλέξτε ένα',
	'autocreatewiki-required' => '$1 = απαιτείται',
	'autocreatewiki-web-address' => 'Ηλεκτρονική διεύθυνση:',
	'autocreatewiki-category-select' => 'Επιλέξτε ένα',
	'autocreatewiki-language-top' => 'Οι $1 πιο δημοφιλείς γλώσσες',
	'autocreatewiki-language-all' => 'Όλες οι γλώσσες',
	'autocreatewiki-birthdate' => 'Ημερομηνία γέννησης:',
	'autocreatewiki-remember' => 'Αποθήκευση',
	'autocreatewiki-create-account' => 'Δημιουργία λογαριασμού',
	'autocreatewiki-done' => 'έγινε',
	'autocreatewiki-error' => 'σφάλμα',
	'autocreatewiki-haveaccount-question' => 'Έχετε ήδη ένα λογαριασμό Wikia;',
	'autocreatewiki-success-title-default' => 'Το wiki σας έχει δημιουργηθεί!',
	'autocreatewiki-success-subtitle' => 'Μπορείτε τώρα να ξεκινήσετε να δουλεύετε το wiki σας επισκέπτοντας:',
	'autocreatewiki-success-has-been-created' => 'έχει δημιουργηθεί!',
	'autocreatewiki-success-get-started' => 'Ξεκινήστε',
	'autocreatewiki-info-domain' => 'Καλύτερα να χρησιμοποιήσετε μια λέξη-κλειδί αναζήτησης του θέματός σας.',
	'autocreatewiki-info-topic' => 'Βάλε τε μια σύντομη περιγραφή όπως "Διαδίκτυο" ή "Λογοτεχνεία".',
	'autocreatewiki-info-language' => 'Αυτή θα είναι η προεπιλεγμένη γλώσσα για τους επισκέπτες του wiki σας.',
	'autocreatewiki-info-email-address' => 'Το ηλεκτρονικό σας ταχυδρομείο δεν φαίνεται σε κανέναν στο Wikia.',
	'autocreatewiki-info-realname' => 'Αν το δώσετε, αυτό θα χρησιμοποιηθεί για να σας αποδωθεί η δουλειά σας.',
	'autocreatewiki-info-birthdate' => 'Η Wikia απαιτεί από όλους τους χρήστες να δώσουν την πραγματική ημερομηνία γέννησής τους ως μέτρο ασφάλειας και ως μέσο διατήρησης της ακεραιότητας του ιστότοπου ενόσω συμμορφώνεται με κανονισμούς των Ηνωμένων Πολιτειών Αμερικής.',
	'autocreatewiki-info-blurry-word' => 'Για αποφυγή αυτόματης δημιουργίας λογαριασμού, παρακαλώ πληκτρολογίστε τη θολή λέξη που βλέπετε στο πεδίο.',
	'autocreatewiki-name-too-short' => 'Αυτό το όνομα είναι πολύ μικρό, παρακαλώ διαλέξτε ένα όνομα με τουλάχιστον τρεις χαρακτήρες.', # Fuzzy
	'autocreatewiki-invalid-username' => 'Αυτό το όνομα χρήστη δεν είναι έγκυρο.',
	'autocreatewiki-busy-username' => 'Αυτό το όνομα χρήστη υπάρχει ήδη.',
	'autocreatewiki-congratulation' => 'Συγχαρητήρια!',
	'autocreatewiki-welcometalk-log' => 'Χαιρετιστήριο Μήνυμα',
	'newwikis' => 'Νέα wiki',
	'autocreatewiki-subname-answers' => 'Απαντήσεις',
);

/** Esperanto (Esperanto)
 * @author Tradukisto
 */
$messages['eo'] = array(
	'autocreatewiki-language-top' => '$1 plej gravaj lingvoj',
	'autocreatewiki-language-all' => 'Ĉiuj lingvoj',
	'autocreatewiki-create-account' => 'Registri sin',
	'autocreatewiki-done' => 'farita',
	'autocreatewiki-haveaccount-question' => 'Ĉu vi jam havas Wikia-konton?',
	'autocreatewiki-success-title-default' => 'Via vikio estas kreita!',
	'autocreatewiki-info-topic' => 'Aldoni mallongan priskribon, ekzemple "Stelaj Militoj" aŭ "Televidaj programoj".',
	'autocreatewiki-invalid-wikiname' => 'La nomo ne povas enhavi specialajn signojn (ekzemple $ aŭ @) aŭ esti malplena.',
	'autocreatewiki-name-too-long' => 'La adreso estas tro longa. Elektu adreson kun maksimume 50 signoj.',
	'autocreatewiki-category-label' => 'Kategorio:',
	'autocreatewiki-welcomebody' => 'Saluton, $2!

La vikio, kiun vi volas krei, estas akcesebla ĉe <$1>. Ni esperas, ke vi redaktos tion!

Ni donis iom da informoj kaj konsiloj ĉe via diskuta paĝo (<$5>) por helpi al vi komenci.

Se vi havos iujn ajn problemojn, vi povas peti por helpo ĉe via vikio ĉe <http://www.wikia.com/wiki/Forum:Help_desk> (angle) aŭ via retpoŝtadreso al community@wikia.com. Vi ankaŭ povas viziti nian babilejon ĉe <http://irc.wikia.com> (angle).

Sukceson kun la projekto!

$3

Teamo de Wikia

<http://www.wikia.com/wiki/User:$4>', # Fuzzy
);

/** Spanish (español)
 * @author Benfutbol10
 * @author Bola
 * @author Crazymadlover
 * @author DJ Nietzsche
 * @author Locos epraix
 * @author Pertile
 * @author Peter17
 * @author Translationista
 * @author VegaDark
 */
$messages['es'] = array(
	'autocreatewiki' => 'Crear nuevo Wiki',
	'autocreatewiki-desc' => 'Crear un wiki en WikiFactory a petición de un usuario',
	'autocreatewiki-page-title-default' => 'Crear un nuevo wiki',
	'autocreatewiki-page-title-answers' => 'Crear un nuevo sitio de Respuestas',
	'createwiki' => 'Solicita un nuevo wiki',
	'autocreatewiki-chooseone' => 'Elige una',
	'autocreatewiki-required' => '$1 = requerido',
	'autocreatewiki-web-address' => 'Dirección Web',
	'autocreatewiki-category-select' => 'Selecciona una',
	'autocreatewiki-language-top' => 'Top $1 de idiomas',
	'autocreatewiki-language-all' => 'Todos los idiomas',
	'autocreatewiki-birthdate' => 'Fecha de nacimiento:',
	'autocreatewiki-blurry-word' => 'Palabra borrosa:',
	'autocreatewiki-remember' => 'Recordarme',
	'autocreatewiki-create-account' => 'Crear una Cuenta',
	'autocreatewiki-done' => 'hecho',
	'autocreatewiki-error' => 'error',
	'autocreatewiki-haveaccount-question' => '¿Tienes ya cuenta en Wikia?',
	'autocreatewiki-success-title-default' => '¡Tu wiki ha sido creado!',
	'autocreatewiki-success-title-answers' => '¡Su sitio de respuestas ha sido creada!',
	'autocreatewiki-success-subtitle' => 'Ya puedes comenzar a trabajar en tu wiki visitando:',
	'autocreatewiki-success-has-been-created' => 'ha sido creado!',
	'autocreatewiki-success-get-started' => 'Comenzar',
	'autocreatewiki-info-domain' => 'Lo mejor es usar las palabras que tengan más posibilidades de ser buscada sobre el tema de tu wiki. Por ejemplo si el tema es una serie de televisión, las palabras serían el nombre de la serie.',
	'autocreatewiki-info-topic' => 'Añade una descripción corta como por ejemplo "Star Wars" o "Series de TV".',
	'autocreatewiki-info-category-default' => 'Esto ayudará a los visitantes a encontrar su wiki.',
	'autocreatewiki-info-category-answers' => 'Esto ayudará a los visitantes a encontrar su sitio de Respuestas.',
	'autocreatewiki-info-language' => 'Este será el idioma por defecto para los visitantes de tu wiki.',
	'autocreatewiki-info-email-address' => 'Tu dirección de email no se mostrará a nadie en Wikia.',
	'autocreatewiki-info-realname' => 'Si optas por proporcionarlo, se usará para dar atribución a tu trabajo.',
	'autocreatewiki-info-birthdate' => 'Wikia solicita a todos los usuarios que pongan su fecha real de nacimiento como una medida de seguridad y como una forma de preservar la integridad del sitio mientras cumple con las regulaciones federales.',
	'autocreatewiki-info-blurry-word' => 'Para ayudar protegernos contra la creación de cuentas automáticas, escribe la palabra borrosa que ves en el campo que hay, por favor.',
	'autocreatewiki-info-terms-agree' => 'Con la creación de un wiki y una cuenta de usuario, aceptas los <a href="http://www.wikia.com/wiki/Terms_of_use">Términos de Uso de Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Solamente Staff:</b> El usuario especificado figurará como el fundador del wiki.',
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => 'Wikia ha superado el número máximo de creaciones de wikis de hoy ($1).',
	'autocreatewiki-limit-creation' => 'Has excedido el número máximo de creación de wikis en 24 horas ($1).',
	'autocreatewiki-empty-field' => 'Por favor, completa este campo.',
	'autocreatewiki-bad-name' => 'El nombre no puede contener caracteres especiales (como $ o @) y deben ser palabras simples y sin espacios.',
	'autocreatewiki-invalid-wikiname' => 'El nombre no puede contener caracteres especiales (como $ o @) y el campo no puede estar vacío.',
	'autocreatewiki-violate-policy' => 'El nombre del wiki contiene una palabra que viola nuestra política de nombres',
	'autocreatewiki-name-taken' => 'Ya existe un wiki con esa dirección. Eres bienvenido a participar con nosotros en <a href="http://$1.wikia.com">http://$1.wikia.com</a> o escoge otra dirección.',
	'autocreatewiki-name-too-short' => 'Esta dirección es demasiado corta, por favor, elige una dirección con al menos 3 caracteres.',
	'autocreatewiki-name-too-long' => 'Esta dirección es demasiado larga, por favor, elige una dirección con un máximo de 50 caracteres.',
	'autocreatewiki-similar-wikis' => 'Debajo están los wikis ya creados sobre este tema. Te sugerimos editar en alguno de ellos.',
	'autocreatewiki-invalid-username' => 'Este nombre de usuario no es válido',
	'autocreatewiki-busy-username' => 'Este nombre de usuario ya está en uso.',
	'autocreatewiki-blocked-username' => 'No puedes crear la cuenta.',
	'autocreatewiki-user-notloggedin' => '¡Tu cuenta fue creada, pero no te identificaste!',
	'autocreatewiki-empty-language' => 'Por favor, selecciona el idioma del wiki.',
	'autocreatewiki-empty-category' => 'Por favor, selecciona una de las categorías.',
	'autocreatewiki-empty-wikiname' => 'El campo del nombre del wiki no puede estar vacío.',
	'autocreatewiki-empty-username' => 'El campo del nombre de usuario no puede estar vacío.',
	'autocreatewiki-empty-password' => 'El campo de la contraseña no puede estar vacío.',
	'autocreatewiki-empty-retype-password' => 'El campo para repetir la contraseña no puede estar vacío.',
	'autocreatewiki-category-label' => 'Categoría:',
	'autocreatewiki-category-other' => 'Otro',
	'autocreatewiki-set-username' => 'Pon el nombre de usuario primero.',
	'autocreatewiki-invalid-category' => 'Valor inválido para la categoría. Por favor, selecciona el apropiado desde la lista desplegable de abajo.',
	'autocreatewiki-invalid-language' => 'Valor inválido para el idioma. Por favor, selecciona el apropiado desde la lista desplegable de abajo.',
	'autocreatewiki-invalid-retype-passwd' => 'Escribe la misma contraseña que arriba.',
	'autocreatewiki-invalid-birthday' => 'Fecha de nacimiento inválida',
	'autocreatewiki-limit-birthday' => 'Inhabilitado para crear registros.',
	'autocreatewiki-log-title' => 'Tu wiki está siendo creado',
	'autocreatewiki-step0' => 'Iniciando proceso ...',
	'autocreatewiki-stepdefault' => 'El proceso está en marcha, por favor, espera un poco ...',
	'autocreatewiki-errordefault' => 'El proceso no fue terminado...',
	'autocreatewiki-step1' => 'Creando carpeta de imágenes ...',
	'autocreatewiki-step2' => 'Creando base de datos ...',
	'autocreatewiki-step3' => 'Configurando la información por defecto en la base de datos ...',
	'autocreatewiki-step4' => 'Copiando imágenes y logo por defecto ...',
	'autocreatewiki-step5' => 'Configurando variables por defecto en la base de datos ...',
	'autocreatewiki-step6' => 'Configurando tablas por defecto en la base de datos ...',
	'autocreatewiki-step7' => 'Configurando el idioma del starter ...',
	'autocreatewiki-step8' => 'Configurando grupos de usuarios y categorías ...',
	'autocreatewiki-step9' => 'Configurando las variables para el nuevo wiki ...',
	'autocreatewiki-step10' => 'Configurando páginas de la central de Wikia ...',
	'autocreatewiki-step11' => 'Enviando email al usuario ...',
	'autocreatewiki-redirect' => 'Redirigiendo al nuevo Wiki: $1 ...',
	'autocreatewiki-congratulation' => '¡Felicidades!',
	'autocreatewiki-welcometalk-log' => 'Bienvenida al nuevo sysop',
	'autocreatewiki-regex-error-comment' => 'usados en $1 wiki (texto íntegro: $2)',
	'autocreatewiki-step2-error' => '¡La base de datos ya existe!',
	'autocreatewiki-step3-error' => '¡No se puede configurar la información por defecto en la base de datos!',
	'autocreatewiki-step6-error' => '¡No se pueden configurar las tablas por defecto en la base de datos!',
	'autocreatewiki-step7-error' => '¡No se puede copiar el starter para este idioma en la base de datos!',
	'autocreatewiki-protect-reason' => 'Parte de la interfaz oficial',
	'autocreatewiki-welcomesubject' => '¡$1 ha sido creado!',
	'autocreatewiki-welcomebody' => 'Hola, $2,

El wiki que solicitaste está disponible en <$1> ¡Esperamos verte editando ahí pronto!

Hemos añadido alguna Información y Consejos en tu Página de Discusión de Usuario (<$5>) para ayudarte a comenzar.

Si tienes cualquier problema, puedes preguntar por la comunidad de ayuda en el wiki en <http://es.wikia.com/wiki/Forum:Secci%C3%B3n_de_ayuda>, y el blog de Wikia <http://es.wikia.com/wiki/Categoría:Noticias_de_Wikia> donde encontrarás trucos y consejos, información sobre nuevas funcionalidades y nuevas cosas que suceden en Wikia. 

Puedes contactar conmigo directamente por email o en mi página de discusión, si tienes alguna pregunta o inquietud.

¡Buena suerte con el proyecto!

$3

Equipo Comunitario de Wikia

<http://www.wikia.com/wiki/User:$4>',
	'autocreatewiki-welcometalk-wall-title' => '¡Bienvenido!',
	'autocreatewiki-welcometalk-wall' => '¡Hola!
¡Estamos encantados de que {{subst:SITENAME}} forme parte de la comunidad de Wikia! Todavía queda mucho por hacer, así que aquí tienes algunos consejos y enlaces para mejorar tu wiki:
*¿No estás seguro de por dónde empezar? ¡Pásate por la [[w:c:community:Admin_Central:Main_Page|Comunidad de administradores]] y consulta el [[w:c:community:Blog:Wikia_Founders_&_Admins|blog]] para encontrar consejos para comenzar tu wiki y hacerlo crecer!
 *Visita el [[w:c:community:main page|wiki central de la comunidad]] para hacer amigos a través del [[w:c:community:Special:Chat|chat]], consigue más información sobre las nuevas características y mantente actualizado con las novedades y características futuras de Wikia en el [[w:c:community:Blog:Wikia_Staff_Blog|blog del personal]]. 
*Echa una ojeada a nuestra [[w:c:community:Webinars|serie web]], a la que te puedes subscribir para estar en contacto con el personal de Wikia, así como para revisar las sesiones anteriores.  *¡Asegúrate de consultar las [[Special:WikiFeatures|características del wiki]] para ver las características que puedes activar en tu wiki!
 *Explora nuestros [[w:c:community:Admin_Central:Forum|foros]] en la Central de administración para ver lo que preguntan los administradores de otros wikis. 
*Por último, visita nuestras [[w:c:community:Help:Contents|páginas de ayuda]] para encontrar las respuestas a cualquier pregunta específica que puedas tener.
Todos los enlaces anteriores son magníficos lugares para comenzar a explorar Wikia. Si no sabes como continuar o tienes una pregunta sin respuesta, pónte en contacto con nosotros [[Special:Contact|aquí]]. Pero por encima de todo, ¡diviértete!
¡Pásalo bien!',
	'autocreatewiki-welcometalk' => "== ¡Bienvenidos! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hola \$1 -- nos encanta que '''\$4''' sea parte de la comunidad Wikia!

Ahora tienes un sitio web entero que completar con información, fotos y videos relacionados con tu tema favorito, pero de momento, sólo encontrarás páginas en blanco mirándote fijamente. Tenebroso ¿no? En adelante descubrirás algunas formas de comenzar.

* '''Escribe tu tema''' en la página principal. Esta es tu oportunidad para explicar a tus lectores de qué se trata el asunto. Escribe tanto como quieras. Tu descripción puede contener vínculos a todas las páginas importantes de tu sitio.

* '''Haz nuevas páginas''' -- Para empezar, una o dos oraciones son más que suficientes. ¡No permitas que la página en blanco se quede mirándote! Una wiki consiste en añadir y cambiar cosas con el tiempo. También puedes subir fotos y videos para completar la página y hacerla más interesante.

¡No te detengas! A las personas les gusta visitar wikis que tengan mucho contenido para leer y mirar. Así que sigue añadiendo cosas para atraer a lectores y editores. Hay mucho por hacer, pero no te amilanes. Hoy es apenas tu primer día y tienes mucho tiempo por delante. Cada wiki empieza de la misma manera: un poquito cada vez, comenzando por las primeras páginas hasta que se convierte en un grandísimo y movidísimo sitio.

Si tienes algunas dudas, envíanos un correo electrónico a través de nuestro [[Special:Contact|formulario de contacto]]. ¡Que te diviertas!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Nuevos wikis',
	'newwikisstart' => 'Mostrar wikis comenzando por:',
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
	'autocreatewiki-reminder-body' => '
Estimado/a $1,

Felicidades por comenzar tu nuevo wiki, Messaging Wiki! Puedes regresar a tu wiki y añadir más contenido visitando $2.

Esto es un nuevo proyecto de wiki, así que por favor, ¡escríbenos si tienes cualquier pregunta!

-- Equipo Comunitario de Wikia',
	'autocreatewiki-reminder-body-HTML' => '<p>Estimado/a $1,</p>

<p>¡Felicidades por comenzar tu nuevo wiki, {{SITENAME}}! Puedes regresar a tu wiki y añadir más contenido visitando <a href="$2">$2</a>.</p>

<p>Esto es un nuevo proyecto de wiki, así que por favor, ¡escríbenos si tienes cualquier pregunta!</p>

<p>-- Equipo Comunitario de Wikia</p>',
	'autocreatewiki-subname-answers' => 'Respuestas',
);

/** Estonian (eesti)
 * @author KalmerE.
 */
$messages['et'] = array(
	'autocreatewiki' => 'Loo uus viki',
	'autocreatewiki-desc' => 'Loo uus viki WikiFactorysse kasutaja taotluse soovil',
	'autocreatewiki-page-title-default' => 'Loo uus viki',
	'autocreatewiki-page-title-answers' => 'Loo uus Vastuste sait',
	'createwiki' => 'Loo uus viki',
	'autocreatewiki-chooseone' => 'Vali üks',
	'autocreatewiki-required' => '$1= kohustuslik',
	'autocreatewiki-web-address' => 'Veebiaadress',
	'autocreatewiki-category-select' => 'Vali üks',
	'autocreatewiki-language-top' => 'Keelte esitabel $1',
	'autocreatewiki-language-all' => 'Kõik keeled',
	'autocreatewiki-birthdate' => 'Sünnikuupäev:',
	'autocreatewiki-blurry-word' => 'Ebaselge sõna:',
	'autocreatewiki-remember' => 'Pea mind meeles',
	'autocreatewiki-create-account' => 'Loo konto',
	'autocreatewiki-done' => 'valmis',
	'autocreatewiki-error' => 'tõrge',
	'autocreatewiki-haveaccount-question' => 'Kas sul on juba Wikias konto?',
	'autocreatewiki-success-title-default' => 'Sinu viki on loodud!',
	'autocreatewiki-success-title-answers' => 'Sinu küsimuste sait on loodud!',
	'autocreatewiki-success-subtitle' => 'Võid alustada tööd isiklikul viki saidil, minnes lehele:',
	'autocreatewiki-success-has-been-created' => 'on loodud!',
	'autocreatewiki-success-get-started' => 'Alusta',
	'autocreatewiki-info-domain' => 'Soovituslik on kasutada sõna, mis oleks sinu teema otsingu võtmesõna.',
	'autocreatewiki-info-topic' => 'Lisa lühike kirjeldus, näiteks "Star Warsist" või "Telesaadetest".',
	'autocreatewiki-info-category-default' => 'See aitab leida külastajatel sinu vikit.',
	'autocreatewiki-title-template' => '$1 Viki',
	'autocreatewiki-category-label' => 'Kategooria:',
	'autocreatewiki-category-other' => 'Muu',
	'autocreatewiki-congratulation' => 'Õnnitlen!',
	'autocreatewiki-welcometalk-log' => 'Tere tulemast sõnum',
);

/** Basque (euskara)
 * @author An13sa
 */
$messages['eu'] = array(
	'autocreatewiki' => 'Wiki berria sortu',
	'autocreatewiki-category-select' => 'Bat aukeratu',
	'autocreatewiki-language-all' => 'Hizkuntza guztiak',
	'autocreatewiki-birthdate' => 'Jaiotza data:',
	'autocreatewiki-remember' => 'Gogora nazazu',
	'autocreatewiki-create-account' => 'Kontua sortu',
	'autocreatewiki-done' => 'egina',
	'autocreatewiki-error' => 'errorea',
	'autocreatewiki-category-label' => 'Kategoria:',
	'autocreatewiki-congratulation' => 'Zorionak!',
	'autocreatewiki-subname-answers' => 'Erantzunak',
);

/** Persian (فارسی)
 * @author BlueDevil
 * @author Ebraminio
 * @author Huji
 * @author Wayiran
 * @author جواد
 * @author پاناروما
 */
$messages['fa'] = array(
	'autocreatewiki' => 'ایجاد ویکی جدید',
	'autocreatewiki-page-title-default' => 'ایجاد ویکی جدید',
	'autocreatewiki-page-title-answers' => 'ایجاد یک تارنمای جدید پاسخ‌ها',
	'createwiki' => 'ایجاد ویکی جدید',
	'autocreatewiki-chooseone' => 'یکی را انتخاب کنید',
	'autocreatewiki-required' => '$1= مورد نیاز',
	'autocreatewiki-web-address' => 'نشانی اینترنتی:',
	'autocreatewiki-category-select' => 'یکی را انتخاب کنید',
	'autocreatewiki-language-top' => '$1 زبان برتر',
	'autocreatewiki-language-all' => 'همۀ زبان‌ها',
	'autocreatewiki-birthdate' => 'تاریخ تولد:',
	'autocreatewiki-blurry-word' => 'لغت نامعلوم:',
	'autocreatewiki-remember' => 'مرا به خاطر بسپار',
	'autocreatewiki-create-account' => 'ایجاد حساب کاربری',
	'autocreatewiki-done' => 'تمام شد',
	'autocreatewiki-error' => 'خطا',
	'autocreatewiki-haveaccount-question' => 'آیا از قبل در ویکیا حساب کاربری دارید؟',
	'autocreatewiki-success-title-default' => 'ویکی شما ایجاد شد!',
	'autocreatewiki-success-title-answers' => 'وبگاه پاسخ‌های شما ایجاد شده است!',
	'autocreatewiki-success-subtitle' => 'با مراجعه به نشانی روبرو شما می‌توانید کار بر روی ویکی خود را آغاز کنید:',
	'autocreatewiki-success-has-been-created' => 'ایجاد شده است!',
	'autocreatewiki-success-get-started' => 'شروع',
	'autocreatewiki-info-domain' => 'بهتر است از کلمه‌ای استفاده کنید که درصد جستجو شدن آن در موضوع ویکی شما زیاد باشد.',
	'autocreatewiki-info-topic' => 'اضافه کردن توضیحات کوتاه مانند "جنگ ستارگان" یا "نمایش‌های تلویزیونی".',
	'autocreatewiki-info-category-default' => 'این به بازدیدکنندگان کمک می‌کند ویکی شما را پیدا کنند.',
	'autocreatewiki-info-language' => 'این زبان پیش‌فرض ویکی شما خواهد بود.',
	'autocreatewiki-info-email-address' => 'آدرس پست الکترونیکی شما به کاربران ویکیا نمایش داده نخواهد شد.',
	'autocreatewiki-info-birthdate' => 'تمام کاربران ویکیا مستلزم هستند که تاریخ تولد اصلی خود را برای احتیاط و حفظ منافع وب‌گاه در برابر دولت ارائه کنند.',
	'autocreatewiki-info-blurry-word' => 'برای جلوگیری از ایجاد خودکار حساب کاربری، لطفا حروف بالا را در این فیلد وارد کنید.',
	'autocreatewiki-info-terms-agree' => 'با ایجاد ویکی و حساب کاربری شما <a href="http://www.wikia.com/wiki/Terms_of_use">شرایط استفاده از ویکیا</a> را قبول می‌کنید.',
	'autocreatewiki-title-template' => 'ویکی $1',
	'autocreatewiki-empty-field' => 'لطفا این فیلد را کامل کنید.',
	'autocreatewiki-bad-name' => 'نام ویکی شامل کاراکترهای مخصوص (مانند $ یا @) نمی‌تواند باشد و باید حروف کوچک انگلیسی بدون فاصله باشد.',
	'autocreatewiki-violate-policy' => 'نام این ویکی شامل لغتی است که ناقض سیاست‌ نام‌گذاری ما است',
	'autocreatewiki-name-too-short' => 'نشانی بسیار کوتاه است، یک نشانی با کمینه ۳ نویسه برگزینید.',
	'autocreatewiki-name-too-long' => 'نشانی بسیار طولانی است. لطفاً یک نشانی با بیشینه ۵۰ نویسه برگزینید.',
	'autocreatewiki-similar-wikis' => 'در زیر ویکی‌های قرار دارند که تاکنون در این موضوع ایجاد شده‌اند. ما ویرایش یکی از آن‌ها را پیشنهاد می‌کنیم.',
	'autocreatewiki-invalid-username' => 'این نام کاربری معتبر نیست.',
	'autocreatewiki-busy-username' => 'این نام کاربری از قبل انتخاب شده‌است.',
	'autocreatewiki-blocked-username' => 'شما اجازۀ ایجاد حساب کاربری ندارید.',
	'autocreatewiki-user-notloggedin' => 'حساب کاربری شما ساخته‌شد ولی هنوز به سامانه وارد نشده‌اید!',
	'autocreatewiki-empty-language' => 'لطفا زبان ویکی را انتخاب کنید.',
	'autocreatewiki-empty-category' => 'لطفا یکی از رده‌ها را انتخاب کنید.',
	'autocreatewiki-empty-wikiname' => 'نام ویکی نمی‌تواند خالی باشد.',
	'autocreatewiki-empty-username' => 'نام کاربری نمی‌تواند خالی باشد.',
	'autocreatewiki-empty-password' => 'گذرواژه نمی‌تواند خالی باشد.',
	'autocreatewiki-empty-retype-password' => 'فیلد تکرار گذرواژه نمی‌تواند خالی باشد.',
	'autocreatewiki-category-label' => 'رده:',
	'autocreatewiki-category-other' => 'سایر',
	'autocreatewiki-set-username' => 'نخست نام کاربری را تنظیم کن.',
	'autocreatewiki-invalid-category' => 'مقدار نامعتبر رده.
لطفاً از فهرست کشویی گزینهٔ مناسب را برگزینید.',
	'autocreatewiki-invalid-language' => 'مقدار نامعتبر برای زبان.
لطفاً گزینهٔ مناسب را از فهرست کشویی زیر برگزینید.',
	'autocreatewiki-invalid-retype-passwd' => 'لطفاً گذرواژهٔ بالا را دوباره تایپ کنید',
	'autocreatewiki-invalid-birthday' => 'تاریخ تولد نامعتبر',
	'autocreatewiki-limit-birthday' => 'ناتوان از ایجاد نام‌نویسی',
	'autocreatewiki-log-title' => 'ویکی شما در حال ایجادشدن است',
	'autocreatewiki-step0' => 'فرایند راه‌اندازی ...',
	'autocreatewiki-stepdefault' => 'فرآیند در حال انجام‌شدن است، لطفا صبر کنید ...',
	'autocreatewiki-errordefault' => 'عمل پایان نیافت ...',
	'autocreatewiki-step1' => 'ایجاد پوشهٔ تصاویر ...',
	'autocreatewiki-step2' => 'ایجاد پایگاه داده ...',
	'autocreatewiki-step3' => 'تنظیم اطلاعات پیش‌فرض در پایگاه داده ...',
	'autocreatewiki-step4' => 'کپی‌کردن تصاویر پیش‌فرض و آرم ...',
	'autocreatewiki-step5' => 'تنظیم متغیرهای پیش‌فرض در پایگاه داده ...',
	'autocreatewiki-step6' => 'تنظیم جدول‌های پیش‌فرض در پایگاه داده ...',
	'autocreatewiki-step7' => 'در حال تنظیم نسخه آغازگر ویکی ...',
	'autocreatewiki-step8' => 'در حال تنظیم اختیارات گروه‌های کاربری و رده‌ها ...',
	'autocreatewiki-step9' => 'در حال تنظیم متغیرهای ویکی جدید ...',
	'autocreatewiki-step10' => 'تنظیم صفحات در ویکی مرکزی ...',
	'autocreatewiki-step11' => 'فرستادن رایانامه به کاربر...',
	'autocreatewiki-redirect' => 'تغییر مسیر به ویکی جدید: $1 ...',
	'autocreatewiki-congratulation' => 'مبارک باشد!',
	'autocreatewiki-welcometalk-log' => 'پیغام خوش‌آمد گویی',
	'autocreatewiki-regex-error-comment' => 'در ویکی $1 به کار رفته است (کل متن: $2)',
	'autocreatewiki-step2-error' => 'پایگاه داده وجود دارد!',
	'autocreatewiki-step3-error' => 'نمی‌توان اطلاعات پیش‌فرض را در پایگاه داده تنظیم کرد!',
	'autocreatewiki-step6-error' => 'نمی‌توان جدول‌های پیش‌فرض را در پایگاه داده تنظیم کرد!',
	'autocreatewiki-step7-error' => 'نسخه‌برداری از پایگاه آغازگر ویکی با موفقیت انجام نشد!',
	'autocreatewiki-protect-reason' => 'بخشی از رابط رسمی',
	'autocreatewiki-welcomesubject' => '$1 ساخته شد!',
	'autocreatewiki-welcomebody' => 'سلام $2،

ویکیایی که شما درخواست کرده بودید در <$1> قابل دسترسی است. ما امیدواریم به زودی شاهد ویرایش شما در آنجا باشیم!

ما یک سری اطلاعات و نکته‌هایی در صفحهٔ بحثتان (<$5>) اضافه کرده‌ایم تا به شما برای شروع ویکی‌تان کمک کند.

اگر سوالی دارید، به این ایمیل پاسخ دهید یا در صفحات راهنمای ویکیا در <http://help.wikia.com> جستجو کنید یا با community@wikia.com نامه‌نگاری کنید. شما همچنین می‌توانید &lrm;#wikia کانال چت آی‌آرسی <http://irc.wikia.com> ما را ببینید.

با پروژه موفق باشید!

$3

تیم جامعهٔ ویکیا

<http://www.wikia.com/wiki/User:$4>', # Fuzzy
	'autocreatewiki-welcometalk' => '<div align="right" dir="rtl" style="font-family: Tahoma;">
سلام $1، ما از داشتن \'\'\'$4\'\'\' در بین دیگر ویکیاهای ویکیا بسیار خوشحالیم!

شروع کردن ویکی جدید می‌تواند کار بزرگی باشد، ولی نگران نباشید، [[wikia:Community Team|تیم اجتماع ویکیا]] برای کمک اینجاست! ما راهنمایی‌هایی برای کمک به شروع ویکی جدید آماده کرده‌ایم. در کنار راهنمایی‌های ویکیا می‌توانید به ویکی‌های دیگر در [[w:c:fa:شرکت ویکیا|ویکیا]] برای گرفتن ایده جهت قالب بندی، رده بندی، و غیره سر بزنید. همه ما عضوی از خانواده بزرگ ویکیا هستیم که برای خوش گذرانی در اینجا با هم مشارکت می‌کنیم!
* [[w:c:help:Help:Starting this wiki|راهنمای شروع ویکی]] ما ۵ نکته به شما می‌دهد تا همین الان ویکی خود را به بهترین وجه تنظیم نمایید.
*ما همچنین [[w:c:help:Advice:Advice on starting a wiki| توصیه‌هایی برای شروع ویکی]] آماده  کرده‌ایم که اطلاعات عمیق‌تری برای ساخت ویکی جدید به شما می‌دهد.
*اگر شما کاربر جدید ویکیا هستید، ما به شما توصیه می‌کنیم که به [[w:c:fa:پرسش‌های رایج|پرسش‌های رایج کاربران جدید]]  مراجعه کنید.
اگر کمکی نیاز داشتید، می‌توانید به [[w:c:help|راهنمای ویکیا]] مراجعه کنید و یا از طریق [[Special:Contact|فرم تماس]] به ما پست الکترونیکی بزنید.

منتظر درخشش پروژه شما هستیم!

با آرزوی بهترین‌ها، [[User:$2|$3]] <staff />
</div>',
	'newwikis' => 'ویکی‌های جدید',
	'newwikisstart' => 'نمایش ویکی‌هایی که شروع می‌شوند در:',
	'autocreatewiki-reminder-body' => '$1 گرامی:

آغاز ویکی جدیدتان {{SITENAME}} را تبریک می‌گوییم! شما می‌توانید با بازدید از $2، بازگشته و چیزهای بیش‌تری به ویکی‌تان بیفزایید.

این یک پروژهٔ کاملاً تازه است، پس لطفاً اگر پرسشی دارید از ما بپرسید!

-- گروه جامعهٔ ویکیا',
	'autocreatewiki-subname-answers' => 'پاسخ‌ها',
);

/** Finnish (suomi)
 * @author Centerlink
 * @author Crt
 * @author Lukkipoika
 * @author Nike
 * @author Tofu II
 * @author VezonThunder
 */
$messages['fi'] = array(
	'autocreatewiki' => 'Luo uusi wiki',
	'autocreatewiki-desc' => 'Luo käyttäjän pyynnöistä wikin sivustolle WikiFactory',
	'autocreatewiki-page-title-default' => 'Luo uusi wiki',
	'autocreatewiki-page-title-answers' => 'Luo uusi "Vastaussivusto"',
	'createwiki' => 'Luo uusi wiki',
	'autocreatewiki-chooseone' => 'Valitse yksi',
	'autocreatewiki-required' => '$1 = vaadittu',
	'autocreatewiki-web-address' => 'Verkko-osoite:',
	'autocreatewiki-category-select' => 'Valitse yksi',
	'autocreatewiki-language-top' => 'Top$1 kieltä',
	'autocreatewiki-language-all' => 'Kaikki kielet',
	'autocreatewiki-birthdate' => 'Syntymäaika:',
	'autocreatewiki-blurry-word' => 'Sumea sana:',
	'autocreatewiki-remember' => 'Muista minut',
	'autocreatewiki-create-account' => 'Luo tunnus',
	'autocreatewiki-done' => 'tehty',
	'autocreatewiki-error' => 'virhe',
	'autocreatewiki-haveaccount-question' => 'Onko sinulla jo Wikia-tili?',
	'autocreatewiki-success-title-default' => 'Wikisi on luotu!',
	'autocreatewiki-success-title-answers' => 'Vastaussivusi on luotu!',
	'autocreatewiki-success-subtitle' => 'Nyt voit aloittaa työsi wikissäsi osoitteessa:',
	'autocreatewiki-success-has-been-created' => 'on luotu!',
	'autocreatewiki-success-get-started' => 'Aloita',
	'autocreatewiki-info-domain' => 'Kannattaa käyttää sanaa, jolla aihettasi todennäköisesti haetaan.',
	'autocreatewiki-info-topic' => 'Lisää lyhyt kuvaus, kuten ”Tähtien sota” tai ”TV-ohjelmat”.',
	'autocreatewiki-info-category-default' => 'Tämä auttaa kävijöitä löytämään wikisi.',
	'autocreatewiki-info-category-answers' => 'Tämä auttaa vierailijoita löytämään sinun Vastaussivustosi.',
	'autocreatewiki-info-language' => 'Tämä tulee olemaan wikisi kävijöiden oletuskieli.',
	'autocreatewiki-info-email-address' => 'Sähköpostiosoitettasi ei koskaan näytetä kenellekään Wikiassa.',
	'autocreatewiki-info-realname' => 'Jos valitset sen tarjoamisen, tätä käytetään antamaan sinulle syy työhön.',
	'autocreatewiki-info-birthdate' => 'Wikia vaatii kaikkia käyttäjiä antamaan oikean syntymäaikansa sekä turvatoimena että tapana säilyttää sivuston eheys samalla, kun tulee noudattaa hallinnollisia säädöksiä.',
	'autocreatewiki-info-blurry-word' => 'Automaattisen tunnusten luonnin estämiseksi kirjoita näkemäsi sumea sana tähän kenttään.',
	'autocreatewiki-info-terms-agree' => 'Luomalla wikin ja käyttäjätunnuksen hyväksyt <a href="http://www.wikia.com/wiki/Terms_of_use">Wikian käyttösäännöt</a>.',
	'autocreatewiki-info-staff-username' => '<b>Vain henkilökunnalle:</b> Valittu käyttäjä merkitään perustajaksi.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Wikia on saavuttanut maksimimäärän luotuja wikejä tänään ($1).',
	'autocreatewiki-limit-creation' => 'Olet ylittänyt wikien luonnin enimmäismäärän 24 tunnin sisällä ( $1 ).',
	'autocreatewiki-empty-field' => 'Täytä tämä kenttä, kiitos.',
	'autocreatewiki-bad-name' => 'Nimi ei voi sisältää erikoismerkkejä (kuten $ tai @) ja sen on oltava pienin kirjaimin kirjoitettu sana ilman välilyöntejä.',
	'autocreatewiki-invalid-wikiname' => 'Nimi ei voi sisältää erikoismerkkejä (kuten $ tai @) ja se ei voi olla tyhjä',
	'autocreatewiki-violate-policy' => 'Tämän wikin nimi sisältää sanan joka vastustaa nimipolitiikkaamme.',
	'autocreatewiki-name-taken' => 'Wiki tässä osoitteessa on jo olemassa. Aloita muokkaaminen <a href="http://$1.wikia.com">http://$1.wikia.com</a>ssä tai valitse toinen osoite.',
	'autocreatewiki-name-too-short' => 'Tämä osoite on liian lyhyt. Valitse osoite, jossa on vähintään 3 merkkiä.',
	'autocreatewiki-name-too-long' => 'Tämä osoite on liian pitkä. Valitse osoite, jossa on enintään 50 merkkiä.',
	'autocreatewiki-similar-wikis' => 'Alla ovat wikit jotka ovat jo luotu tälle aiheelle. Ehdotamme yhden muokkaamista niistä.',
	'autocreatewiki-invalid-username' => 'Tämä käyttäjätunnus on virheellinen.',
	'autocreatewiki-busy-username' => 'Tämä käyttäjätunnus on jo varattu.',
	'autocreatewiki-blocked-username' => 'Et voi luoda tunnusta.',
	'autocreatewiki-user-notloggedin' => 'Tunnuksesi luotiin mutta et ole kirjautunut sisään!',
	'autocreatewiki-empty-language' => 'Valitse wikillesi kieli.',
	'autocreatewiki-empty-category' => 'Valitse yksi luokista.',
	'autocreatewiki-empty-wikiname' => 'Wikinimi ei voi olla tyhjä.',
	'autocreatewiki-empty-username' => 'Käyttäjätunnus ei voi olla tyhjä.',
	'autocreatewiki-empty-password' => 'Salasana ei voi olla tyhjä.',
	'autocreatewiki-empty-retype-password' => 'Kirjoita salasana; se ei voi olla tyhjä.',
	'autocreatewiki-category-label' => 'Luokka:',
	'autocreatewiki-category-other' => 'Muu',
	'autocreatewiki-set-username' => 'Aseta käyttäjätunnus ensin.',
	'autocreatewiki-invalid-category' => 'Virheellinen luokka.
Valitse asianmukainen nimi avattavasta luettelosta.',
	'autocreatewiki-invalid-language' => 'Valitse kelvollinen kieli alasvetovalikosta.',
	'autocreatewiki-invalid-retype-passwd' => 'Kirjoita sama salasana kuin edellä',
	'autocreatewiki-invalid-birthday' => 'Virheellinen syntymäaika',
	'autocreatewiki-limit-birthday' => 'Tunnuksen luonti ei onnistunut.',
	'autocreatewiki-log-title' => 'Wikisi on nyt luotu.',
	'autocreatewiki-step0' => 'Alustetaan prosessia...',
	'autocreatewiki-stepdefault' => 'Prosessi on käynnissä, odota...',
	'autocreatewiki-errordefault' => 'Prosessi ei ole päättynyt...',
	'autocreatewiki-step1' => 'Luodaan kuvahakemisto...',
	'autocreatewiki-step2' => 'Luodaan tietokanta...',
	'autocreatewiki-step3' => 'Asetetaan oletustiedot tietokantaan...',
	'autocreatewiki-step4' => 'Kopioidaan oletuskuvat ja logo...',
	'autocreatewiki-step5' => 'Asetetaan oletustiedot tietokantaan...',
	'autocreatewiki-step6' => 'Asetetaan tietokannan oletustaulukot...',
	'autocreatewiki-step7' => 'Asetetaan kielialoitinta...',
	'autocreatewiki-step8' => 'Määritetään käyttäjäryhmät ja luokat...',
	'autocreatewiki-step9' => 'Määritetään uudet wikimuuttujat...',
	'autocreatewiki-step10' => 'Määritetään sivuja keskuswikiin...',
	'autocreatewiki-step11' => 'Lähetetään sähköpostia käyttäjälle...',
	'autocreatewiki-redirect' => 'Ohjataan uuteen wikiin: $1...',
	'autocreatewiki-congratulation' => 'Onnittelut!',
	'autocreatewiki-welcometalk-log' => 'Tervetuloviesti',
	'autocreatewiki-regex-error-comment' => 'käytetty wikissä $1 (koko teksti: $2)',
	'autocreatewiki-step2-error' => 'Tietokanta on olemassa!',
	'autocreatewiki-step3-error' => 'Oletusarvon mukaan tietoja ei voi asettaa tietokantaan!',
	'autocreatewiki-step6-error' => 'Oletusarvon mukaan taulukoita ei voi asettaa tietokantaan!',
	'autocreatewiki-step7-error' => 'Aloitusversion tietokannan kieltä ei voi kopioida!',
	'autocreatewiki-protect-reason' => 'Osa virallista käyttöliittymää',
	'autocreatewiki-welcomesubject' => '$1 on luotu.',
	'autocreatewiki-welcomebody' => 'Hei $2

Wikisi on luotu! Katso: <$1>

Oletko valmis aloittamaan? Olemme lisänneet muutamia linkkejä keskustelusivulle ( $5 >), joka auttaa sinut alkuun ja kannustaa. Voit tutkia monia hyödyllisiä alueita Wikian ympärillä. Jos sinulla on kysymyksiä tai tuntuu hieman menetetyltä, vastaa tähän viestiin tai tutustu Ohjesivuihimme <http: help.wikia.com="">.

Voit katsoa myös Perustaja & Ylläpitäjä-blogi <http:> </http:>  %3AWikia_Founders_% 26_Admins > ja Wikian henkilökunnan blogiin <http: community.wikia.com/wiki/blog:wikia_staff_blog=""> josta löydät vinkkejä, uusia ominaisuuksia ja uusia asioita joita Wikiassa tapahtuu.

Onnellista muokkaamista!

$3
Wikia-yhteisön tukihenkilökunta
<http://community.wikia.com/wiki/User:$4>

___________________________________________
 * haluatko saada meiltä vähemmän viestejä? Voit peruuttaa tilauksen tai muuttaa sähköpostin asetukset tässä: http://community.wikia.com/Special:Preferences</http:> </http:>',
	'autocreatewiki-welcometalk' => "== Tervetuloa! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hei \$1 -- olemme innostuneita saamaan '''\$4''' osaksi Wikia-yhteisöämme!

Nyt sinulla on kokonainen nettisivusto täytettäväksi tiedolla, kuvilla ja videoilla suosikkiaiheestasi. Mutta juuri nyt, se on tyhjä wiki täynnä tyhjiä sivuja vain tuijottamassa sinua... Pelottavaa, eikö? Tässä on muutamia keinoja aloittamiseen:

* '''Esittele aihettasi''' etusivulla. Tämä on mahdollisuutesi selittää wikisi lukijoille, mistä se kertoo. Kirjoita niin paljon kuin haluat! Kuvauksessasi voi olla vaikka linkkejä wikisi tärkeille sivuille.

* '''Tee uusia sivuja''' -- vain lause tai kaksi on hyvä aloitus. Älä anna tyhjien sivujen tuijottaa sinua enempää! Joka kerta kun tulet sivulle, voit muokata sitä miten haluat. Sinä voit myös lisätä kuvia ja videoita täyttääksesi sivusi ja tehdäksesi siitä kiinnostavamman.

Ja sitten jatka vain samaan malliin! Ihmiset pitävät vierailusta wikeissä kun siellä on paljon mistä lukea ja katsoa, joten lisää asioita usein wikiisi, ja sinä houkuttelet varmasti paljon lukijoita ja muokkaajia. Täällä on paljon tehtävää, mutta älä huoli -- tämä on ensimmäinen päiväsi, ja sinulla on paljon aikaa. Joka wiki aloittaa samalla tavalla -- vähän kerrallaan, aloittamalla muutamia entisiä sivuja, kunnes se kasvaa suureksi, kiireiseksi wikiksi.

Jos sinulla on kysyttävää, [[Special:Contact|lähetä sähköpostia]] Wikian tukihenkilökunnalle. Pidä hauskaa!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Uudet wikit',
	'newwikisstart' => 'Näytä wikit alkaen:',
	'autocreatewiki-reminder-body' => 'Hyvä $1:

Onnittelut uuden wikisi, {{SITENAME}}n aloittamisen johdosta! Voit tulla takaisin ja lisätä muuta wikiisi jos vierailet sivustolla: $2.

Tämä on uusi projekti, joten ystävällisesti kirjoita meille jos sinulla on kysymyksiä!


-- Wikian Community Team',
	'autocreatewiki-reminder-body-HTML' => '<p>Hyvä $1:</p>

<p>Onnittelut siitä, etttä käynnistit uuden wiki-sivuston, {{SITENAME}}! Voit palata ja lisätä lisää wiki-tekstiä vierailemalla osoitteessa
<a href="$2">$2</a>.</p>

<p>Tämä on uposuusi projekti, joten kirjoita meille, jos sinulla on jotain kysyttävä!</p>

<p>-- Wikia-yhteistöryhmä</p>',
	'autocreatewiki-subname-answers' => 'Vastaukset',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'autocreatewiki' => 'Stovnað eina nýggja wiki',
	'autocreatewiki-desc' => 'Stovnað wiki í WikiFactory eftir áheitan frá brúkara',
	'autocreatewiki-page-title-default' => 'Stovnað nýggja wiki',
	'autocreatewiki-page-title-answers' => 'Stovnað eina nýggja Svar síðu',
	'createwiki' => 'Stovna eina nýggja wiki',
	'autocreatewiki-chooseone' => 'Vel ein',
	'autocreatewiki-required' => '$1 = er kravt',
	'autocreatewiki-web-address' => 'Internet bústaður:',
);

/** French (français)
 * @author Gomoko
 * @author IAlex
 * @author Iluvalar
 * @author Jean-Frédéric
 * @author McDutchie
 * @author Peter17
 * @author Verdy p
 * @author Wyz
 */
$messages['fr'] = array(
	'autocreatewiki' => 'Créer un nouveau wiki',
	'autocreatewiki-desc' => 'Crée un wiki dans WikiFactory par des requêtes des utilisateurs',
	'autocreatewiki-page-title-default' => 'Créer un wiki',
	'autocreatewiki-page-title-answers' => 'Créer un nouveau site de réponses',
	'createwiki' => 'Créer un wiki',
	'autocreatewiki-chooseone' => 'Choisissez-un un',
	'autocreatewiki-required' => '$1 = obligatoire',
	'autocreatewiki-web-address' => 'Adresse Web :',
	'autocreatewiki-category-select' => 'Sélectionnez-en un',
	'autocreatewiki-language-top' => 'Les $1 langues les plus utilisées',
	'autocreatewiki-language-all' => 'Toutes les langues',
	'autocreatewiki-birthdate' => 'Date de naissance :',
	'autocreatewiki-blurry-word' => 'Mot flouté :',
	'autocreatewiki-remember' => 'Se souvenir de moi',
	'autocreatewiki-create-account' => 'Créer un compte',
	'autocreatewiki-done' => 'fait',
	'autocreatewiki-error' => 'erreur',
	'autocreatewiki-haveaccount-question' => 'Avez-vous déjà un compte Wikia ?',
	'autocreatewiki-success-title-default' => 'Votre wiki a bien été créé !',
	'autocreatewiki-success-title-answers' => 'Votre site de réponses a été créé.',
	'autocreatewiki-success-subtitle' => 'Vous pouvez commencer à travailler sur votre wiki en visitant :',
	'autocreatewiki-success-has-been-created' => 'a bien été créé !',
	'autocreatewiki-success-get-started' => 'Démarrer',
	'autocreatewiki-info-domain' => "Le mieux est d'utiliser un mot qui sera vraisemblablement un mot clé de recherche pour votre sujet.",
	'autocreatewiki-info-topic' => 'Ajoutez une courte description comme « Star Wars » ou « Émission TV ».',
	'autocreatewiki-info-category-default' => 'Ceci aidera les visiteurs à trouver votre wiki.',
	'autocreatewiki-info-category-answers' => 'Ceci aidera les visiteurs à trouver votre site de réponses.',
	'autocreatewiki-info-language' => 'Langue du wiki',
	'autocreatewiki-info-email-address' => "Votre adresse de courriel n'est jamais montrée à personne sur Wikia.",
	'autocreatewiki-info-realname' => 'Si vous choisissez de le donner, il sera utilisé pour vous attribuer votre travail.',
	'autocreatewiki-info-birthdate' => 'Wikia demande à ce que tous les utilisateurs fournissent leur date de naissance réelle comme mesure de précaution et de sécurité mais également dans le but de préserver l’intégrité du site en en étant en accord avec le règlement fédéral.',
	'autocreatewiki-info-blurry-word' => 'Pour nous aider à nous protéger contre la création automatisée de compte, veuillez taper le mot floué que vous voyez dans ce champ.',
	'autocreatewiki-info-terms-agree' => 'En créant un wiki et un compte utilisateur, vous acceptez les <a href="http://www.wikia.com/wiki/Terms_of_use">conditions d\'utilisation de Wiki</a>.',
	'autocreatewiki-info-staff-username' => "<b>Staff seulement :</b> l'utilisateur spécifié sera considéré comme le fondateur du wiki.",
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => "Wikia a dépassé la limite de création de nouveaux wikis pour aujourd'hui ($1).",
	'autocreatewiki-limit-creation' => 'Vous avez dépassée la limite maximale de création de wiki en 24 heures ($1).',
	'autocreatewiki-empty-field' => 'Complétez ce champ.',
	'autocreatewiki-bad-name' => 'Le nom ne doit pas contenir de caractères spéciaux (comme $ et @) et doit être un simple mot en minuscules sans espaces.',
	'autocreatewiki-invalid-wikiname' => 'Le nom ne doit pas contenir de caractères spéciaux (comme $ et @) et ne peut pas être vide',
	'autocreatewiki-violate-policy' => 'Ce wiki contient un nom qui viole notre politique de nommage',
	'autocreatewiki-name-taken' => 'Il y a déjà un wiki à cette adresse. Participez sur <a href="http://$1.wikia.com">http://$1.wikia.com</a> ou choisissez une autre adresse.',
	'autocreatewiki-name-too-short' => 'L’adresse est trop courte, choisissez une adresse avec au moins 3 caractères.',
	'autocreatewiki-name-too-long' => 'L’adresse est trop longue, choisissez une adresse avec au maximum 50 caractères.',
	'autocreatewiki-similar-wikis' => "Une liste des wikis créés sur le même sujet est affichée ci-dessous. Nous vous suggérons d'aller sur un de ceux-là.",
	'autocreatewiki-invalid-username' => "Le nom d'utilisateur est invalide.",
	'autocreatewiki-busy-username' => "Le nom d'utilisateur est déjà pris.",
	'autocreatewiki-blocked-username' => 'Vous ne pouvez pas créer un compte.',
	'autocreatewiki-user-notloggedin' => "Votre compte a été créé mais vous n'êtes pas connecté !",
	'autocreatewiki-empty-language' => 'Sélectionnez la langue du wiki.',
	'autocreatewiki-empty-category' => 'Sélectionnez une catégorie.',
	'autocreatewiki-empty-wikiname' => 'Le nom du wiki ne peut pas être vide.',
	'autocreatewiki-empty-username' => "Le nom d'utilisateur ne peut pas être vide.",
	'autocreatewiki-empty-password' => 'Le mot de passe ne peut pas être vide.',
	'autocreatewiki-empty-retype-password' => 'Le mot de passe ré-entré ne peut pas être vide.',
	'autocreatewiki-category-label' => 'Catégorie :',
	'autocreatewiki-category-other' => 'Autre',
	'autocreatewiki-set-username' => "Définissez le nom d'utilisateur d'abord.",
	'autocreatewiki-invalid-category' => 'Valeur invalide pour la catégorie. Veuillez sélectionner une valeur de la liste.',
	'autocreatewiki-invalid-language' => 'Valeur invalide pour la langue. Veuillez sélectionner une valeur de la liste',
	'autocreatewiki-invalid-retype-passwd' => 'Veuillez retaper le même mot de passe que ci-dessus',
	'autocreatewiki-invalid-birthday' => 'Date de naissance invalide',
	'autocreatewiki-limit-birthday' => "Impossible de créer l'enregistrement.",
	'autocreatewiki-log-title' => 'Votre wiki est en cours de création',
	'autocreatewiki-step0' => 'Initialisation ...',
	'autocreatewiki-stepdefault' => "Le processus est en cours d'exécution, veuillez patienter ...",
	'autocreatewiki-errordefault' => "Le processus ne s'est pas terminé ...",
	'autocreatewiki-step1' => 'Création du dossier des images ...',
	'autocreatewiki-step2' => 'Création de la base de données ...',
	'autocreatewiki-step3' => 'Ajout des informations par défaut dans la base de données ...',
	'autocreatewiki-step4' => 'Copie des images par défaut et du logo ...',
	'autocreatewiki-step5' => 'Ajout des variables par défaut dans la base de données ...',
	'autocreatewiki-step6' => 'Ajout des tables par défaut dans la base de données ...',
	'autocreatewiki-step7' => 'Ajout des bases pour la langue ...',
	'autocreatewiki-step8' => 'Ajout des groupes utilisateurs et catégories ...',
	'autocreatewiki-step9' => 'Ajout des variables du nouveau wiki ...',
	'autocreatewiki-step10' => 'Ajout des pages dans le wiki central ...',
	'autocreatewiki-step11' => "Envoi du courriel à l'utilisateur ...",
	'autocreatewiki-redirect' => 'Redirection vers le nouveau wiki : $1 ...',
	'autocreatewiki-congratulation' => 'Félicitations !',
	'autocreatewiki-welcometalk-log' => 'Message de bienvenue',
	'autocreatewiki-regex-error-comment' => 'utilisé dans le wiki $1 (texte complet : $2)',
	'autocreatewiki-step2-error' => 'La base de données existe !',
	'autocreatewiki-step3-error' => "Impossible d'ajouter les informations par défaut dans la base de données !",
	'autocreatewiki-step6-error' => "Impossible d'ajouter les tables par défaut dans la base de données !",
	'autocreatewiki-step7-error' => 'Impossible de copier la base de données de base pour cette langue !',
	'autocreatewiki-protect-reason' => "Partie de l'interface officielle",
	'autocreatewiki-welcomesubject' => '$1 a été créé!',
	'autocreatewiki-welcomebody' => "Bonjour $2 !

Votre wiki a été créé ! Voyez : <$1>

Prêt à commencer ? Nous avons ajouté quelques liens sur votre page de discussion (<$5>) pour vous aider à commencer et vous encourager à explorer les nombreuses zones d'aide de Wikia. Si vous avez des questions ou vous sentez un peu perdu, répondez à ce message ou regardez nos pages d'aide <http://aide.wikia.com>.

Vous pouvez aussi regarder le blog d'actualité <http://communaute.wikia.com/wiki/Blog:Actualit%C3%A9_Wikia> où vous trouverez des trucs et astuces, des informations sur les nouvelles fonctionnalités et les nouveautés sur Wikia.

Bonnes modifications !

$3
L’équipe Wikia
<http://communaute.wikia.com/wiki/Utilisateur:$4>",
	'autocreatewiki-welcometalk-wall-title' => 'Bienvenue!',
	'autocreatewiki-welcometalk-wall' => "Bonjour à tous!
Nous sommes ravis que {{subst:SITENAME}} fasse partie de la communauté Wikia! Il y a encore beaucoup à faire, donc voici quelques conseils utiles et des liens pour faire évoluer votre wiki:
*Pas sûr de là où commencer? Arrêtez-vous sur [[w:c:community:Admin_Central:Main_Page|le centre Fondateur &amp; Administrateur]] et consultez le [[w:c:community:Blog:Wikia_Founders_&_Admins|blog]] pour des conseils sur la manière de démarrer votre wiki et le faire grandir!
*Visitez [[w:c:community:main page|le centre de la communauté]] pour vous faire des amis via [[w:c:community:Special:Chat|la discusssion]], apprenez à connaître les nouvelles fonctionnalités et soyez à jour sur les informations de Wikia et les fonctionnalités à venir sur le [[w:c:community:Blog:Wikia_Staff_Blog|blog de l'équipe]].
*Jetez un œil sur notre [[w:c:community:Webinars|série de webinar]] -- où vous pouvez vous inscrire pour interagir avec l'équipe Wikia, tout comme revoir les sessions passées
*Assurez-vous de regarder les [[Special:WikiFeatures|fonctionnalités Wiki]] pour voir lesquelles vous pouvez activer sur votre wiki!
*Explorez nos [[w:c:community:Admin_Central:Forum|forums]] sur le centre Fondateur et Administrateur pour voir ce que les autres administrateurs de wiki demandent. 
*Enfin, visitez nos [[w:c:community:Help:Contents|pages d'aide]] pour répondre à toute question particulière que vous pouvez avoir.
Tous les liens ci-dessus sont de bons endroits pour commencer à explorer Wikia. Si vous êtes bloqué ou avez une question dont vous ne trouvez pas la réponse — veuillez nous contacter [[Special:Contact|ici]]. Mais le plus est important est: amusez-vous! :)
Bonnes modifications!",
	'autocreatewiki-welcometalk' => "== Bienvenue ! ==

<div style=\"font-size:120%; line-height:1.2em;\">Bonjour \$1, nous sommes fiers d’héberger votre site '''\$4''' chez Wikia!

Maintenant vous avez un site web qu'il faudra remplir avec des informations, des images et des vidéos. Mais à présent il est juste vide et il vous attend... Cela vous faît-il peur ? Voici quelques conseils pour bien débuter.

* '''Décrivez le sujet''' sur la page d'accueil. Ceci est votre opportunité pour expliquer aux lecteurs vos sujets préférés. Écrivez-en autant que vous voulez ! Votre description peut avoir des liens vers toutes les pages importantes de votre wiki.

* '''Commencez quelques pages''' -- juste quelques phrases peuvent suffire. Ne laissez pas de pages blanches ! Un wiki est fait pour ajouter et modifier le contenu au fil de votre avancement. Vous pouvez aussi ajouter des images et des vidéos, pour compléter les pages et les rendre plus intéressantes.

Et ensuite continuez ! Les gens aiment aller sur des wikis où il y a beaucoup de choses à lire, donc continuez à ajouter du contenu pour attirer les lecteurs et les éditeurs. Il y a beaucoup à faire mais ne vos en faîtes pas -- aujourd'hui est le premier jour, et vous avez beaucoup de temps. Tous les wikis ont bien commencé un jour -- juste un peu de temps pour débuter quelques pages, jusqu'à ce qu'il devienne un grand site

Si vous avez des questions, vous pouvez nous écrire par cette page [[Special:Contact]]. Nous vous souhaitons bien du plaisir ! 

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Nouveaux wikis',
	'newwikisstart' => 'Afficher les wikis depuis :',
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
	'autocreatewiki-reminder-body' => 'Cher $1 :

Félicitations pour le commencement de votre nouveau wiki, {{SITENAME}} ! Vous pouvez revenir et ajouter plus à votre wiki en visitant $2.

Ceci est un tout nouveau projet, veuillez nous écrire si avec une quelconque question !

— Équipe de la communauté Wikia',
	'autocreatewiki-reminder-body-HTML' => '<p>Cher $1 :</p>

<p>Félicitations pour avoir commencer votre nouveau wiki, {{SITENAME}} ! Vous pouvez revenir et ajouter plus à votre wiki en visitant <a href="$2">$2</a>.</p>

<p>Ceci est un tout nouveau projet, veuillez nous écrire si vous avez une quelconque question !</p>

<p>— Équipe de la communauté Wikia</p>',
	'autocreatewiki-subname-answers' => 'Réponses',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'autocreatewiki' => 'Crear un novo wiki',
	'autocreatewiki-desc' => 'Crea un wiki en WikiFactory mediante a solicitude dun usuario',
	'autocreatewiki-page-title-default' => 'Crear un novo wiki',
	'autocreatewiki-page-title-answers' => 'Crear un novo sitio de respostas',
	'createwiki' => 'Crear un novo wiki',
	'autocreatewiki-chooseone' => 'Escolla un',
	'autocreatewiki-required' => '$1 = obrigatorio',
	'autocreatewiki-web-address' => 'Enderezo web:',
	'autocreatewiki-category-select' => 'Seleccione un',
	'autocreatewiki-language-top' => 'As $1 linguas máis empregadas',
	'autocreatewiki-language-all' => 'Todas as linguas',
	'autocreatewiki-birthdate' => 'Data de nacemento:',
	'autocreatewiki-blurry-word' => 'Palabra borrosa:',
	'autocreatewiki-remember' => 'Lembrádeme',
	'autocreatewiki-create-account' => 'Crear unha conta',
	'autocreatewiki-done' => 'feito',
	'autocreatewiki-error' => 'erro',
	'autocreatewiki-haveaccount-question' => 'Xa ten unha conta Wikia?',
	'autocreatewiki-success-title-default' => 'Creouse o seu wiki!',
	'autocreatewiki-success-title-answers' => 'Creouse o seu sitio de respostas!',
	'autocreatewiki-success-subtitle' => 'Xa pode comezar a traballar no seu wiki, visite:',
	'autocreatewiki-success-has-been-created' => 'foi creado correctamente!',
	'autocreatewiki-success-get-started' => 'Introdución',
	'autocreatewiki-info-domain' => 'O mellor é usar como palabra clave unha que describa claramente o seu tema.',
	'autocreatewiki-info-topic' => 'Engada unha breve descrición, como "Star Wars" ou "series de televisión".',
	'autocreatewiki-info-category-default' => 'Isto axudará aos visitantes a atopar o seu wiki.',
	'autocreatewiki-info-category-answers' => 'Isto axudará aos visitantes a atopar o seu sitio de respostas.',
	'autocreatewiki-info-language' => 'Esta será a lingua por defecto para os visitantes do seu wiki.',
	'autocreatewiki-info-email-address' => 'Non se mostrará a ninguén en Wikia o seu enderezo de correo electrónico.',
	'autocreatewiki-info-realname' => 'Se escolle dalo utilizarase para atribuírlle o seu traballo.',
	'autocreatewiki-info-birthdate' => 'Wikia necesita que todos os usuarios acheguen a súa data de nacemento real como precaución de seguridade e como medio para preservar a integridade do sitio, respectando as normativas nacionais.',
	'autocreatewiki-info-blurry-word' => 'Para axudarnos á protección contra a creación de contas automáticas, escriba a palabra borrosa que vexa neste campo.',
	'autocreatewiki-info-terms-agree' => 'Ao crear un wiki e unha conta de usuario, vostede acepta os <a href="http://www.wikia.com/wiki/Terms_of_use">termos de uso de Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Persoal só:</b> o usuario especificado será considerado o fundador.',
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => 'Wikia superou o número máximo de novos wikis para hoxe ($1).',
	'autocreatewiki-limit-creation' => 'Superou o número máximo de novos wikis en 24 horas ($1).',
	'autocreatewiki-empty-field' => 'Por favor, encha este campo.',
	'autocreatewiki-bad-name' => 'O nome non pode conter caracteres especiais (como $ ou @) e debe ser unha soa palabra en minúsculas e sen espazos.',
	'autocreatewiki-invalid-wikiname' => 'O nome non pode conter caracteres especiais (como $ ou @) e non pode estar baleiro',
	'autocreatewiki-violate-policy' => 'O nome deste wiki contén unha palabra que viola a nosa política de nomes',
	'autocreatewiki-name-taken' => 'Xa existe un wiki con este enderezo. Comece a editar en <a href="http://$1.wikia.com">http://$1.wikia.com</a> ou escolla outro enderezo.',
	'autocreatewiki-name-too-short' => 'Este enderezo é curto de máis; escolla un enderezo cun mínimo de 3 caracteres.',
	'autocreatewiki-name-too-long' => 'Este enderezo é longo de máis; escolla un enderezo cun máximo de 50 caracteres.',
	'autocreatewiki-similar-wikis' => 'A continuación móstranse os wikis existentes sobre este tema. Suxerímoslle que edite nalgún deles.',
	'autocreatewiki-invalid-username' => 'Este nome de usuario non é válido.',
	'autocreatewiki-busy-username' => 'Este nome de usuario xa está en uso.',
	'autocreatewiki-blocked-username' => 'Non pode crear unha conta.',
	'autocreatewiki-user-notloggedin' => 'Creouse a súa conta, pero non accedeu ao sistema!',
	'autocreatewiki-empty-language' => 'Por favor, seleccione a lingua do wiki.',
	'autocreatewiki-empty-category' => 'Por favor, seleccione unha categoría.',
	'autocreatewiki-empty-wikiname' => 'O nome do wiki non pode estar baleiro.',
	'autocreatewiki-empty-username' => 'O nome de usuario non pode estar baleiro.',
	'autocreatewiki-empty-password' => 'O contrasinal non pode estar baleiro.',
	'autocreatewiki-empty-retype-password' => 'O campo para repetir o contrasinal non pode estar baleiro.',
	'autocreatewiki-category-label' => 'Categoría:',
	'autocreatewiki-category-other' => 'Outro',
	'autocreatewiki-set-username' => 'Defina o nome de usuario primeiro.',
	'autocreatewiki-invalid-category' => 'Valor inválido para a categoría. Por favor, escolla o valor axeitado da lista despregable.',
	'autocreatewiki-invalid-language' => 'Valor inválido para a lingua. Por favor, escolla o valor axeitado da lista despregable.',
	'autocreatewiki-invalid-retype-passwd' => 'Por favor, escriba o mesmo contrasinal que enriba',
	'autocreatewiki-invalid-birthday' => 'Data de nacemento non válida',
	'autocreatewiki-limit-birthday' => 'Non se puido crear o rexistro.',
	'autocreatewiki-log-title' => 'Estase creando o seu wiki',
	'autocreatewiki-step0' => 'Iniciando o proceso...',
	'autocreatewiki-stepdefault' => 'O proceso está en marcha, por favor, agarde...',
	'autocreatewiki-errordefault' => 'O proceso non rematou...',
	'autocreatewiki-step1' => 'Creando a carpeta de imaxes...',
	'autocreatewiki-step2' => 'Creando a base de datos...',
	'autocreatewiki-step3' => 'Definindo a información por defecto na base de datos...',
	'autocreatewiki-step4' => 'Copiando as imaxes por defecto e mais o logo...',
	'autocreatewiki-step5' => 'Definindo as variables por defecto na base de datos...',
	'autocreatewiki-step6' => 'Definindo as táboas por defecto na base de datos...',
	'autocreatewiki-step7' => 'Definindo o iniciador para a lingua...',
	'autocreatewiki-step8' => 'Definindo os grupos de usuario e mais as categorías...',
	'autocreatewiki-step9' => 'Definindo as variables para o novo wiki...',
	'autocreatewiki-step10' => 'Definindo as páxinas no wiki central...',
	'autocreatewiki-step11' => 'Enviando un correo electrónico ao usuario...',
	'autocreatewiki-redirect' => 'Redirixindo cara ao novo wiki: $1...',
	'autocreatewiki-congratulation' => 'Parabéns!',
	'autocreatewiki-welcometalk-log' => 'Mensaxe de benvida',
	'autocreatewiki-regex-error-comment' => 'empregado no wiki $1 (texto completo: $2)',
	'autocreatewiki-step2-error' => 'Xa existe a base de datos!',
	'autocreatewiki-step3-error' => 'Non se pode definir a información por defecto na base de datos!',
	'autocreatewiki-step6-error' => 'Non se poden definir as táboas por defecto na base de datos!',
	'autocreatewiki-step7-error' => 'Non se pode copiar o iniciador da base de datos para esta lingua!',
	'autocreatewiki-protect-reason' => 'Parte da interface oficial',
	'autocreatewiki-welcomesubject' => 'Creouse $1!',
	'autocreatewiki-welcomebody' => 'Boas, $2!

Creouse o seu wiki! Bótelle unha ollada: <$1>.

Está preparado para comezar? Vimos de engadir algunhas ligazóns na súa páxina de conversa (<$5>) para axudalo a dar os primeiros pasos e animalo a explorar as numerosas zonas útiles de Wikia. Se ten algunha pregunta ou está perdido, responda este correo ou vaia a algunha das nosas páxinas de axuda <http://help.wikia.com>.

Tamén pode consultar o blogue dos fundadores e administradores <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> e o do persoal de Wikia <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> para atopar consellos e trucos, información sobre as novas características e novas sobre todo o que acontece en Wikia.

Que o pase ben editando!

$3
O equipo comunitario de Wikia
<http://www.wikia.com/wiki/User:$4>

___________________________________________
* Quere recibir menos mensaxes da nosa parte? Pode cancelar a súa subscrición ou cambiar as súas preferencias de correo electrónico aquí: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk-wall-title' => 'Reciba a nosa benvida!',
	'autocreatewiki-welcometalk-wall' => 'Ola!
Estamos encantados de que {{subst:SITENAME}} sexa parte da comunidade de Wikia! Aínda hai moito por facer, así que aquí hai algúns consellos e ligazóns para comezar a darlle un pulo ao seu wiki:
*Non está seguro de onde empezar? Pase pola [[w:c:community:Admin_Central:Main_Page|Central de administración]] e consulte o [[w:c:community:Blog:Wikia_Founders_&_Admins|blogue]] para atopar consellos sobre como comezar o wiki e facelo medrar! *Visite o [[w:c:community:main page|wiki central da comunidade]] para facer amizades a través do [[w:c:community:Special:Chat|chat]] e obteña máis información sobre as novas características e estea ao día das novidades sobre Wikia e das características futuras no [[w:c:community:Blog:Wikia_Staff_Blog|blogue do persoal]]. *Bótelle unha ollada á nosa [[w:c:community:Webinars|serie web]], á que se pode subscribir para estar en contacto co persoal de Wikia, así como revisar as sesións anteriores *Asegúrese de consultar as [[Special:WikiFeatures|características do wiki]] para ollar as características que pode activar no seu wiki! *Explore os nosos [[w:c:community:Admin_Central:Forum|foros]] na Central de administración para ver o que preguntan os administradores doutros wikis. *Por último, visite as nosas [[w:c:community:Help:Contents|páxinas de axuda]] para atopar as respostas a calquera pregunta específica que poida ter.
Todas as ligazóns anteriores son magníficos lugares para comezar a explorar Wikia. Se non sabe como continuar ou ten unha pregunta sen resposta, póñase en contacto con nós [[Special:Contact|aquí]]. Pero o máis importante é divertirse! :)
Páseo ben!',
	'autocreatewiki-welcometalk' => "== Benvido! ==
<div style=\"font-size:120%; line-height:1.2em;\">Ola \$1; estamos encantados de que '''\$4''' sexa parte da comunidade de Wikia!

Agora ten un sitio web enteiro para encher con información, fotos e vídeos sobre o seu tema preferido. Pero arestora, só hai páxinas en branco agardando por vostede... Asustado, non? Aquí hai algúns xeitos de comezar.

*'''Faga unha introdución ao seu tema''' na páxina principal. Esta é a súa oportunidade para explicarlles aos seus lectores sobre que trata o sitio. Escriba tanto como queira! A súa descrición pode conter ligazóns cara a todas as páxinas máis importantes.

*'''Comece algunhas páxinas novas''' aínda que sexa cunha ou dúas frases. Non deixe que a páxina en branco lle desanime! Un wiki constrúese aos poucos coas cousas que se van engadindo ou cambiando. Tamén pode incluír fotos e vídeos para encher a páxina e facela máis interesante.

Continúe a traballar! Á xente gústalle visitar os wikis cando hai moitas cousas que ler e mirar, así que siga engadindo cousas e atraerá a lectores e editores. Hai moito que facer, pero non se preocupe: hoxe é o seu primeiro día e ten tempo dabondo. Todos os wikis comezan da mesma maneira: un pouco de cada vez coas primeiras páxinas ata que medran e son un sitio web enorme.

Se ten algunha dúbida ou pregunta, pódenos enviar un correo electrónico a través do noso [[Special:Contact|formulario de contacto]]. Páseo ben!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Novos wikis',
	'newwikisstart' => 'Mostrar os wikis que comecen por:',
	'autocreatewiki-reminder-body' => '
Estimado $1:

Parabéns por comezar o seu novo wiki, {{SITENAME}}! Pode vir cando queira e engadir máis contidos ao seu wiki visitando $2.

Este é un proxecto completamente novo, así que escríbanos se ten algunha dúbida!


-- O equipo comunitario de Wikia',
	'autocreatewiki-reminder-body-HTML' => '<p>Estimado $1:</p>

<p>Parabéns por comezar o seu novo wiki, {{SITENAME}}! Pode vir cando queira e engadir máis contidos ao seu wiki visitando <a href="$2">$2</a>.</p>

<p>Este é un proxecto completamente novo, así que escríbanos se ten algunha dúbida!</p>


<p>-- O equipo comunitario de Wikia</p>',
	'autocreatewiki-subname-answers' => 'Respostas',
);

/** Hebrew (עברית)
 * @author 0ftal
 */
$messages['he'] = array(
	'autocreatewiki' => 'צור אתר וויקי חדש',
	'autocreatewiki-desc' => 'צור אתר ווקי במפעל הווקי עם הגדרות משתמש',
	'autocreatewiki-page-title-default' => 'צור אתר וויקי חדש',
	'createwiki' => 'צור אתר וויקי חדש',
	'autocreatewiki-chooseone' => 'בחר אחד',
	'autocreatewiki-required' => '1$ = חובה',
	'autocreatewiki-web-address' => 'כתובת האינטרנט:',
	'autocreatewiki-category-select' => 'בחר אחד',
	'autocreatewiki-language-top' => '$1 השפות המובילות',
	'autocreatewiki-language-all' => 'כל השפות',
	'autocreatewiki-birthdate' => 'תאריך לידה:',
	'autocreatewiki-blurry-word' => 'מילה מטושטשת:',
	'autocreatewiki-remember' => 'זכור אותי',
	'autocreatewiki-create-account' => 'יצירת חשבון',
	'autocreatewiki-done' => 'הושלם',
	'autocreatewiki-error' => 'שגיאה',
	'autocreatewiki-haveaccount-question' => 'האם יש לך כבר חשבון בוויקיה?',
	'autocreatewiki-success-title-default' => 'אתר הוויקי שלך נוצר!',
	'autocreatewiki-success-subtitle' => 'אתה יכול להתחיל לעבוד על אתר הוויקי שלך בכתובת:',
	'autocreatewiki-success-has-been-created' => 'נוצר!',
	'autocreatewiki-success-get-started' => 'צעדים ראשונים',
	'autocreatewiki-info-domain' => 'כדאי להשתמש במילה שהיא מילת מפתח לחיפוש הנושא שלך.',
	'autocreatewiki-info-topic' => 'הוסף תיאור קצר כגון "מלחמת הכוכבים" או "תוכניות טלוויזיה".',
	'autocreatewiki-info-language' => 'זו תהיה שפת ברירת המחדל עבור המבקרים בוויקי שלך.',
	'autocreatewiki-info-email-address' => 'כתובת הדוא"ל שלך נשמרת בסודיות ואף אחד לא יכול לראותה.',
	'autocreatewiki-info-realname' => 'את תבחרו לציין אותו, הוא ישמש לייחוס עבודתכם אליכם.',
	'newwikis' => 'אתרי וויקי חדשים',
	'newwikisstart' => 'הצג אתרי וויקי המתחילים ב:',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Glanthor Reviol
 * @author TK-999
 */
$messages['hu'] = array(
	'autocreatewiki' => 'Új wiki létrehozása',
	'autocreatewiki-desc' => 'Új wiki létrehozása a Wikigyárban a felhasználói kérések alapján',
	'autocreatewiki-page-title-default' => 'Új wiki létrehozása',
	'createwiki' => 'Új wiki létrehozása',
	'autocreatewiki-chooseone' => 'Válassz egyet',
	'autocreatewiki-required' => '$1 = kötelező',
	'autocreatewiki-web-address' => 'Webcím:',
	'autocreatewiki-category-select' => 'Válassz egyet',
	'autocreatewiki-language-top' => 'Top $1 nyelv',
	'autocreatewiki-language-all' => 'Összes nyelv',
	'autocreatewiki-birthdate' => 'Születési dátum:',
	'autocreatewiki-blurry-word' => 'Elmosott szó:',
	'autocreatewiki-remember' => 'Emlékezzen rám',
	'autocreatewiki-create-account' => 'Fiók létrehozása',
	'autocreatewiki-done' => 'Kész.',
	'autocreatewiki-error' => 'hiba',
	'autocreatewiki-haveaccount-question' => 'Már van Wikia-fiókod?',
	'autocreatewiki-success-title-default' => 'A wiki elkészült!',
	'autocreatewiki-success-subtitle' => 'Elkezdhetsz dolgozni a wikin a következő címre való látogatás után:',
	'autocreatewiki-success-has-been-created' => 'elkészült!',
	'autocreatewiki-success-get-started' => 'Első lépések',
	'autocreatewiki-info-domain' => 'A legcélszerűbb a wikidhez kapcsolódó potenciális keresési kulcsszó beállítása.',
	'autocreatewiki-info-topic' => 'Adj meg egy rövid leírást, például „Star Wars” vagy „TV-műsorok”.',
	'autocreatewiki-info-category-default' => 'Ez segít a látogatóknak a wikid megtalálásában.',
	'autocreatewiki-info-language' => 'Ez lesz a wikid alapértelmezett nyelve a látogatóid számára.',
	'autocreatewiki-info-email-address' => 'Az e-mail címedet sosem mutatjuk meg senkinek a Wikián.',
	'autocreatewiki-info-realname' => 'Ha megadod, ezen a néven leszel jelölve szerzőként a munkáidnál.',
	'autocreatewiki-info-birthdate' => 'A Wikia megköveteli valós születési dátumuk megadását minden felhasználótól elővigyázatosságból, a webhely egységességének megőrzése végett, valamint a szövetségi előírásoknak való megfelelés céljából.',
	'autocreatewiki-info-blurry-word' => 'Az automatizált fióklétrehozás elleni védelem részeként kérjük, hogy írja be a fenti elmosódott szót ebbe a mezőbe.',
	'autocreatewiki-info-terms-agree' => 'A wiki és a felhasználói fiók létrehozásával Ön elfogadja a Wikia <a href="http://www.wikia.com/wiki/Terms_of_Use">felhasználói feltételeit</a>.',
	'autocreatewiki-info-staff-username' => '<b>Csak személyzet:</b> A megadott felhasználó lesz feltüntetve alapítóként.',
	'autocreatewiki-title-template' => '$1-wiki',
	'autocreatewiki-limit-day' => 'A Wikia elérte a ma létrehozható wikik számának maximumát ($1).',
	'autocreatewiki-limit-creation' => 'Túllépted a 24 óra alatt létrehozható wikik maximumát ($1).',
	'autocreatewiki-empty-field' => 'Kérjük, töltse ki ezt a mezőt.',
	'autocreatewiki-bad-name' => 'A felhasználónév nem tartalmazhat különleges karaktereket (pl. $ vagy @) és egy kisbetűs, szóköz nélküli szóból kell állnia.',
	'autocreatewiki-invalid-wikiname' => 'A név nem tartalmazhat speciális karaktereket (például @ vagy $), és nem lehet üres.',
	'autocreatewiki-violate-policy' => 'Ez a wiki-név az elnevezési feltételeinket sértő szót tartalmaz.',
	'autocreatewiki-name-taken' => 'Már található egy wiki ezen a címen. Kezdj el szerkeszteni a <a href="http://$1.wikia.com">http://$1.wikia.com</a> oldalon, vagy válassz egy másik címet.',
	'autocreatewiki-name-too-short' => 'Ez a cím túl rövid, legalább 3 betűset kell választanod.',
	'autocreatewiki-name-too-long' => 'Ez a cím túl hosszú; kérünk, legfeljebb 50 karakteres címet válassz.',
	'autocreatewiki-similar-wikis' => 'Alább láthatók a témába vágó, már létező wikik. Javasoljuk, hogy ezek valamelyiké(i)t szerkeszd.',
	'autocreatewiki-invalid-username' => 'Ez a felhasználónév érvénytelen.',
	'autocreatewiki-busy-username' => 'Ez a felhasználónév már foglalt.',
	'autocreatewiki-blocked-username' => 'Nem hozhatsz létre fiókot.',
	'autocreatewiki-user-notloggedin' => 'A fiók létrejött, de nem lett bejelentkeztetve!',
	'autocreatewiki-empty-language' => 'Válassz nyelvet a wikinek!',
	'autocreatewiki-empty-category' => 'Válassz egy kategóriát.',
	'autocreatewiki-empty-wikiname' => 'A wiki neve nem maradhat üresen.',
	'autocreatewiki-empty-username' => 'A felhasználónév nem maradhat üresen.',
	'autocreatewiki-empty-password' => 'A jelszó nem maradhat üresen.',
	'autocreatewiki-empty-retype-password' => 'A megismételt jelszó nem maradhat üresen.',
	'autocreatewiki-category-label' => 'Kategória:',
	'autocreatewiki-category-other' => 'Egyéb',
	'autocreatewiki-set-username' => 'Először add meg a felhasználónevet!',
	'autocreatewiki-invalid-category' => 'A kategória értéke érvénytelen.
Kérünk, válassz egy megfelelőt a legördülő listából.',
	'autocreatewiki-invalid-language' => 'Érvénytelen nyelvbeállítás.
Kérünk, válassz egy megfelelőt a legördülő listából.',
	'autocreatewiki-invalid-retype-passwd' => 'Írd be újra a fenti jelszót.',
	'autocreatewiki-invalid-birthday' => 'Érvénytelen születési dátum',
	'autocreatewiki-limit-birthday' => 'Nem sikerült végrehajtani a regisztrációt.',
	'autocreatewiki-log-title' => 'A wiki létrehozása folyamatban van',
	'autocreatewiki-step0' => 'Folyamat inicializálása ...',
	'autocreatewiki-stepdefault' => 'A folyamat fut, kérlek várj ...',
	'autocreatewiki-errordefault' => 'A folyamat nem fejeződött be ...',
	'autocreatewiki-step1' => 'Képek mappájának létrehozása ...',
	'autocreatewiki-step2' => 'Adatbázis létrehozása…',
	'autocreatewiki-step3' => 'Adatbázis feltöltése az alapértelmezett információkkal ...',
	'autocreatewiki-step4' => 'Alapértelmezett logó és képek másolása ...',
	'autocreatewiki-step5' => 'Alapértelmezett változók beállítása az adatbázisban ...',
	'autocreatewiki-step6' => 'Az adatbázis alapértelmezett tábláinak beállítása ...',
	'autocreatewiki-step7' => 'Induló nyelv beállítása ...',
	'autocreatewiki-step8' => 'Felhasználói csoportok és kategóriák beállítása ...',
	'autocreatewiki-step9' => 'Az új wiki változónak beállítása ...',
	'autocreatewiki-step10' => 'Oldalak beállítása a központi wikin ...',
	'autocreatewiki-step11' => 'E-nail küldése a felhasználónak ...',
	'autocreatewiki-redirect' => 'Átirányítás az új wikihez: $1',
	'autocreatewiki-congratulation' => 'Gratulálunk!',
	'autocreatewiki-welcometalk-log' => 'Üdvözlő üzenet',
	'autocreatewiki-regex-error-comment' => 'már használt az $1 wikin (teljes szöveg: $2)',
	'autocreatewiki-step2-error' => 'Az adatbázis létezik!',
	'autocreatewiki-step3-error' => 'Nem sikerült beállítani az alapértelmezett információkat az adatbázisban!',
	'autocreatewiki-step6-error' => 'Nem sikerült létrehozni az alapértelmezett táblákat az adatbázisban!',
	'autocreatewiki-step7-error' => 'Nem tudunk kezdő adatbázist másolni a kiválasztott nyelven.',
	'autocreatewiki-protect-reason' => 'A hivatalos felölet része',
	'autocreatewiki-welcomesubject' => '$1 elkészült!',
	'autocreatewiki-welcomebody' => 'Szia, $2!

Létrehoztuk a wikidet! Tekintsd meg: <$1>

Készen állsz az indulásra? Néhány hivatkozást helyeztünk el a vitalapodon, (<$5>) hogy segítsünk az elkezdésben és a Wikia sok hasznos zugának bebarangolására buzdítsunk. Ha valamilyen kérdésed van, vagy elveszettnek érzed magad, válaszolj erre az e-mailre vagy nézz körül a segítő oldalaink közt <http://help.wikia.com>.

Szintén megnézheted a Founder & Admin blogot <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> és a Wikia személyzet blogját <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> ahol tippeket és trükköket gyűjthetsz, továbbá információt szerezhetsz a Wikia friss eseményeiről és új szolgáltatásairól.

Jó szerkesutést!

$3
Wikia közösségi támogatás
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Kevesebb üzenetet szeretnél kapni tőlünk? Itt leiratkozhatsz vagy megváltoztathatod az e-mailekre vonatkozó beállításaidat: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk' => "== Üdv! ==
<div style=\"font-size:120%; line-height:1.2em;\">Szia \$1! &mdash; Örülünk, hogy a(z) '''\$4''' a Wikia közösség része lett!

Most már van egy egész weboldalad, melyet teletölthetsz információval, képekkel és videókkal a kedvenc témádról. De még csak üres lapok néznek vissza rád... Félelmetes, igaz? Itt van néhány módszer az induláshoz.

* '''Mutasd be a témát''' a főoldalon. Ez a lehetőséged, hogy elmagyarázd a témád részleteit az olvasóidnak. Írj annyit, amennyit csak akarsz! A leírásod akár a wikid összes fontos oldalára is hivatkozhat.
* '''Hozz létre néhány új oldalt''' &mdash; egy két mondat is elég a kezdéshez. Ne hagyd, hogy az üres oldal hipnotizáljon! Egy wiki lényege a dolgok állandó hozzáadása és változtatása. Képeket és videókat is beszúrhatsz, hogy kitöltsd és érdekesebbé tedd az oldalt.

Aztán csak menj tovább! Az emberek akkor látogatják a wikiket, ha sok olvasnivaló és megnézendő dolog van, úgyhogy a tartalom folyamatos növelésével olvasókat és szerkesztőket fogsz szerezni. Sok mindent kell tenned, de ne aggódj&mdash;a mai az első napod és rengeteg időd van. Minden wiki ugyanúgy indul&mdash;egyszerre egy kicsi, az első néhány oldal, aztán hatalmas, nyüzsgő wiki lesz belőle.

Ha kérdéseid vannak, küldhetsz nekünk e-mailt a [[Special:Contact|kapcsolatfelvételi űrlap]] segítségével. Jó szórakozást!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Új wikik',
	'newwikisstart' => 'Wikik megjelenítése a következőtől:',
	'autocreatewiki-reminder-body' => 'Kedves $1!

Gratulálunk az új wikid, a {{SITENAME}} létrehozásához! A(z) $2 felkeresésével térhetsz vissza a wikidhez, hogy több tartalmat adjál neki.

Ez egy vadonatúj projekt, úgyhogy írj nekünk, ha bármi kérdésed van!


-- Wikia közösségi támogatás',
	'autocreatewiki-reminder-body-HTML' => '<p>Kedves $1!</p>

<p>Gratulálunk az új wikid, a {{SITENAME}} létrehozásához! A(z) <a href="$2">$2</a> felkeresésével térhetsz vissza a wikidhez, hogy több tartalmat adjál neki.</p>

<p>Ez egy vadonatúj projekt, úgyhogy írj nekünk, ha bármi kérdésed van!</p>


<p>-- Wikia közösségi támogatás</p>',
	'autocreatewiki-subname-answers' => 'Válaszok',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'autocreatewiki' => 'Crear un nove wiki',
	'autocreatewiki-desc' => 'Crear wiki in WikiFactory per requestas de usatores',
	'autocreatewiki-page-title-default' => 'Crear un nove wiki',
	'autocreatewiki-page-title-answers' => 'Crear un nove sito de responsas',
	'createwiki' => 'Crear un nove wiki',
	'autocreatewiki-chooseone' => 'Selige un',
	'autocreatewiki-required' => '$1 = requirite',
	'autocreatewiki-web-address' => 'Adresse web:',
	'autocreatewiki-category-select' => 'Selige un',
	'autocreatewiki-language-top' => 'Le $1 linguas le plus usate',
	'autocreatewiki-language-all' => 'Tote le linguas',
	'autocreatewiki-birthdate' => 'Data de nascentia:',
	'autocreatewiki-blurry-word' => 'Parola brumose:',
	'autocreatewiki-remember' => 'Memorar me',
	'autocreatewiki-create-account' => 'Crear un conto',
	'autocreatewiki-done' => 'finite',
	'autocreatewiki-error' => 'error',
	'autocreatewiki-haveaccount-question' => 'Ha tu ja un conto Wiki?',
	'autocreatewiki-success-title-default' => 'Tu wiki ha essite create!',
	'autocreatewiki-success-title-answers' => 'Tu sito de responsas ha essite create!',
	'autocreatewiki-success-subtitle' => 'Tu pote ora comenciar a laborar a tu wiki per visitar:',
	'autocreatewiki-success-has-been-created' => 'ha essite create!',
	'autocreatewiki-success-get-started' => 'Comenciar',
	'autocreatewiki-info-domain' => 'Es recommendate usar un parola susceptibile de esser cercate pro tu topico.',
	'autocreatewiki-info-topic' => 'Adde un breve description como "Star Wars" o "Series de TV".',
	'autocreatewiki-info-category-default' => 'Isto adjutara le visitatores a trovar tu wiki.',
	'autocreatewiki-info-category-answers' => 'Isto adjutara le visitatores a trovar tu sito de responsas.',
	'autocreatewiki-info-language' => 'Iste essera le lingua predefinite pro le visitatores de tu wiki.',
	'autocreatewiki-info-email-address' => 'Tu adresse de e-mail nunquam es monstrate a alcuno in Wikia.',
	'autocreatewiki-info-realname' => 'Si tu opta pro dar lo, illo essera usate pro dar te attribution pro tu contributiones.',
	'autocreatewiki-info-birthdate' => 'Wikia require que tote le usatores forni lor real data de nascentia como mesura de securitate e como medio de preservar le integritate del sito in conformitate con le regulationes federal statounitese.',
	'autocreatewiki-info-blurry-word' => 'Pro adjutar a proteger le sito contra le creation automatic de contos, per favor entra in iste campo le parola brumose que tu vide.',
	'autocreatewiki-info-terms-agree' => 'Per crear un wiki e un conto de usator, tu accepta le <a href="http://www.wikia.com/wiki/Terms_of_use">conditiones de uso de Wikia</a>.',
	'autocreatewiki-info-staff-username' => '<b>Personal solmente:</b> Le usator specificate essera listate qua fundator.',
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => 'Wikia ha excedite le limite de creation de nove wikis pro hodie ($1).',
	'autocreatewiki-limit-creation' => 'Tu ha excedite le numero de wikis que tu pote crear durante 24 horas ($1).',
	'autocreatewiki-empty-field' => 'Per favor completa iste campo.',
	'autocreatewiki-bad-name' => 'Le nomine non pote continer characteres special (como $ o @) e debe esser un sol parola in minusculas e sin spatios.',
	'autocreatewiki-invalid-wikiname' => 'Le nomine non pote continer characteres special (como $ o @) e non pote esser vacue.',
	'autocreatewiki-violate-policy' => 'Iste nomine de wiki contine un parola que viola nostre politica de nomines.',
	'autocreatewiki-name-taken' => 'Un wiki con iste adresse ja existe. Participa in illo a <a href="http://$1.wikia.com">http://$1.wikia.com</a> o selige un altere adresse.',
	'autocreatewiki-name-too-short' => 'Iste adresse es troppo curte. Selige un adresse con al minus 3 characteres.',
	'autocreatewiki-name-too-long' => 'Iste addresse es troppo longe. Per favor selige un addresse con al plus 50 characteres.',
	'autocreatewiki-similar-wikis' => 'Ecce le wikis ja existente super iste thema. Nos suggere participar in un de illos.',
	'autocreatewiki-invalid-username' => 'Iste nomine de usator es invalide.',
	'autocreatewiki-busy-username' => 'Iste nomine de usator es ja in uso.',
	'autocreatewiki-blocked-username' => 'Tu non pote crear un conto.',
	'autocreatewiki-user-notloggedin' => 'Tu conto ha essite create ma le apertura del session non ha succedite!',
	'autocreatewiki-empty-language' => 'Per favor selige le lingua del wiki.',
	'autocreatewiki-empty-category' => 'Per favor selige un del categorias.',
	'autocreatewiki-empty-wikiname' => 'Le nomine del wiki non pote esser vacue.',
	'autocreatewiki-empty-username' => 'Le nomine de usator non pote esser vacue.',
	'autocreatewiki-empty-password' => 'Le contrasigno non pote esser vacue.',
	'autocreatewiki-empty-retype-password' => 'Le contrasigno repetite non pote esser vacue.',
	'autocreatewiki-category-label' => 'Categoria:',
	'autocreatewiki-category-other' => 'Altere',
	'autocreatewiki-set-username' => 'Defini primo le nomine de usator.',
	'autocreatewiki-invalid-category' => 'Valor invalide de categoria. Per favor selige un categoria del lista disrolante.',
	'autocreatewiki-invalid-language' => 'Valor invalide de lingua. Per favor selige un lingua del lista disrolante.',
	'autocreatewiki-invalid-retype-passwd' => 'Per favor repete le contrasigno entrate hic supra.',
	'autocreatewiki-invalid-birthday' => 'Data de nascentia invalide',
	'autocreatewiki-limit-birthday' => 'Impossibile crear registration.',
	'autocreatewiki-log-title' => 'Tu wiki es in curso de creation',
	'autocreatewiki-step0' => 'Initialisation del processo…',
	'autocreatewiki-stepdefault' => 'Le processo es in curso de execution, un momento…',
	'autocreatewiki-errordefault' => 'Le processo non ha finite…',
	'autocreatewiki-step1' => 'Creation del dossier de imagines…',
	'autocreatewiki-step2' => 'Creation del base de datos…',
	'autocreatewiki-step3' => 'Insertion del informationes predefinite in le base de datos…',
	'autocreatewiki-step4' => 'Copia del imagines predefinite e del logotypo…',
	'autocreatewiki-step5' => 'Configuration del variabiles predefinite in le base de datos…',
	'autocreatewiki-step6' => 'Configuration del tabellas predefinite in le base de datos…',
	'autocreatewiki-step7' => 'Configuration del initiator de lingua…',
	'autocreatewiki-step8' => 'Configuration del gruppos de usator e del categorias…',
	'autocreatewiki-step9' => 'Configuration del variabiles del nove wiki…',
	'autocreatewiki-step10' => 'Insertion de paginas in Wiki central…',
	'autocreatewiki-step11' => 'Invio de e-mail al usator…',
	'autocreatewiki-redirect' => 'Redirection verso le nove Wiki: $1…',
	'autocreatewiki-congratulation' => 'Felicitationes!',
	'autocreatewiki-welcometalk-log' => 'Message de benvenita',
	'autocreatewiki-regex-error-comment' => 'usate in le wiki $1 (texto complete: $2)',
	'autocreatewiki-step2-error' => 'Le base de datos existe!',
	'autocreatewiki-step3-error' => 'Impossibile inserer le informationes predefinite in le base de datos!',
	'autocreatewiki-step6-error' => 'Impossibile inserer le tabellas predefinite in le base de datos!',
	'autocreatewiki-step7-error' => 'Impossibile copiar le base de datos initial pro le lingua!',
	'autocreatewiki-protect-reason' => 'Parte del interfacie official',
	'autocreatewiki-welcomesubject' => '$1 ha essite create!',
	'autocreatewiki-welcomebody' => 'Salute $2!

Tu wiki ha essite create! Jecta un oculo: <$1>

Preste a comenciar? Nos ha addite alcun ligamines a tu pagina de discussion personal (<$5>) pro adjutar te a comenciar e pro incoragiar te a explorar le multitude de areas utile in Wikia. Si tu ha questiones o si tu te senti un poco perdite, responde a iste message o lege nostre paginas de adjuta <http://help.wikia.com>.

Tu pote etiam leger le blog de nostre fundatores e administratores <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> e le blog del personal de Wikia <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> ubi se trova consilios e trucos, information sur nove functionalitate e evenimentos recente a Wikia.

Bon fortuna con le projecto!

$3
Le equipa communitari de Wikia
<http://www.wikia.com/wiki/User:$4>

___________________________________________
* Vole reciper minus messages de nos? Tu pote disabonar te o cambiar tu preferentias de e-mail hic: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk' => "== Benvenite! ==
<div style=\"font-size:120%; line-height:1.2em;\">Salute \$1 -- nos es felice de haber '''\$4''' como parte del communitate de Wikia!

Ora tu ha un tote sito web a impler con informationes, imagines e videos super tu thema favorite. Ma in iste momento, illo consiste solmente de paginas vacue… Intimidante, nonne? Ecce alcun modos de comenciar.

* '''Introduce tu thema''' in le pagina principal. Prende le opportunitate de exponer a tu lectores le essentiales de tu thema. Scribe tanto como tu vole! Le description pote continer ligamines a tote le paginas importante in tu sito.

* '''Comencia nove paginas'''. Non es un problema comenciar con un phrase o duo. Non lassa le pagina vacue intimidar te! In un wiki, il es normal adder e modificar le paginas in modo ad hoc. Tu pote tamben adder imagines e videos, pro completar le pagina e render lo plus interessante.

E postea simplemente continua! Un wiki attractive ha multe cosas a leger e reguardar, dunque continua a adder cosas e tu attrahera lectores e contributores. Il ha multo a facer, ma non te inquieta; hodie es le prime die, e tu ha multe tempore. Omne wiki comencia del mesme modo; pauco a pauco, comenciante con le prime pauc paginas, crescente e transformante se in un grande sito ben frequentate.

Si tu ha questiones, invia nos e-mail per nostre [[Special:Contact|formulario de contacto]]. Bon divertimento!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Nove wikis',
	'newwikisstart' => 'Monstrar wikis a partir de:',
	'autocreatewiki-reminder-body' => '
Car $1,

Felicitationes pro comenciar tu nove wiki, {{SITENAME}}! Tu pote revenir e adder plus a tu wiki per visitar $2.

Isto es un projecto totalmente nove, dunque per favor scribe nos si tu ha alcun question!


-- Equipa communitari de Wikia',
	'autocreatewiki-reminder-body-HTML' => '<p>Car $1,</p>

<p>Felicitationes pro comenciar tu nove wiki, {{SITENAME}}! Tu pote revenir e adder plus a tu wiki per visitar <a href="$2">$2</a>.</p>

<p>Isto es un projecto totalmente nove, dunque per favor scribe nos si tu ha alcun question!</p>

<p>-- Equipa communitari de Wikia</p>',
	'autocreatewiki-subname-answers' => 'Responsas',
);

/** Indonesian (Bahasa Indonesia)
 * @author Aldnonymous
 * @author Farras
 * @author Irwangatot
 */
$messages['id'] = array(
	'autocreatewiki' => 'Buat wiki baru',
	'autocreatewiki-desc' => 'Buat wiki di WikiFactory dari permintaan pengguna',
	'autocreatewiki-page-title-default' => 'Membuat wiki baru',
	'autocreatewiki-page-title-answers' => 'Buat situs Answers baru',
	'createwiki' => 'Buat wiki baru',
	'autocreatewiki-chooseone' => 'Pilih salah satu',
	'autocreatewiki-required' => '$1 = dibutuhkan',
	'autocreatewiki-web-address' => 'Alamat web:',
	'autocreatewiki-category-select' => 'Pilih salah satu',
	'autocreatewiki-language-top' => '$1 bahasa teratas',
	'autocreatewiki-language-all' => 'Semua bahasa',
	'autocreatewiki-birthdate' => 'Tanggal lahir:',
	'autocreatewiki-blurry-word' => 'Kata tersamar:',
	'autocreatewiki-remember' => 'Ingat saya',
	'autocreatewiki-create-account' => 'Buat akun',
	'autocreatewiki-done' => 'Selesai',
	'autocreatewiki-error' => 'kesalahan',
	'autocreatewiki-haveaccount-question' => 'Apakah anda sudah memiliki akun Wikia?',
	'autocreatewiki-success-title-default' => 'Wiki anda telah dibuat!',
	'autocreatewiki-success-title-answers' => 'Situs answers anda terlah dibuat!',
	'autocreatewiki-success-subtitle' => 'Sekarang anda dapat mulai bekerja di wiki Anda dengan mengunjungi:',
	'autocreatewiki-success-has-been-created' => 'telah dibuat!',
	'autocreatewiki-success-get-started' => 'Memulai',
	'autocreatewiki-info-domain' => 'Lebih baik menggunakan kata kunci pencarian paling digemari sebagai  topik anda.',
	'autocreatewiki-info-topic' => 'Tambahkan penjelasan singkat seperti "Star Wars" atau "Acara TV".',
	'autocreatewiki-info-category-default' => 'Hal ini akan membantu pengunjung menemukan wiki Anda.',
	'autocreatewiki-info-category-answers' => 'Hal ini akan membantu pengunjung menemukan situs Answers anda.',
	'autocreatewiki-info-language' => 'Ini akan menjadi bahasa baku untuk pengunjung ke wiki Anda.',
	'autocreatewiki-info-email-address' => 'Alamat surat elektronik Anda tidak pernah ditunjukkan kepada siapa pun di Wikia.',
	'autocreatewiki-info-realname' => 'Jika anda memilih menyediakan ini akan di gunakan  untuk memberi pengenalan atas hasil kerja Anda.',
	'autocreatewiki-info-birthdate' => 'Wikia mengharuskan semua pengguna untuk memberikan tanggal lahir nyata mereka sebagai tindakan pencegahan keamanan dan sebagai cara untuk menjaga integritas dari situs ini sekaligus mematuhi peraturan federal.',
	'autocreatewiki-info-blurry-word' => 'Untuk membantu melindungi terhadap pembuatan akun otomatis, silahkan ketik kata buram yang Anda lihat ke dalam bidang ini.',
	'autocreatewiki-info-terms-agree' => 'Dengan membuat wiki dan akun pengguna,Anda setuju dengan <a href="http://www.wikia.com/wiki/Terms_of_use">Syarat Penggunaan Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Hanya staf:</b> Pengguna yang ditetapkan  akan terdaftar sebagai pendiri.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Wikia telah melampaui jumlah maksimum pembuatan wiki hari ini ($1).',
	'autocreatewiki-limit-creation' => 'Anda telah melebihi jumlah maksimum pembuatan wiki dalam 24 jam ($1).',
	'autocreatewiki-empty-field' => 'Silakan isi bagian ini.',
	'autocreatewiki-bad-name' => 'Nama tidak boleh berisi karakter khusus (seperti $ atau @) dan harus satu kata dalam huruf kecil tanpa spasi .',
	'autocreatewiki-invalid-wikiname' => 'Nama tidak boleh berisi karakter khusus (seperti $ atau @) dan tidak boleh kosong',
	'autocreatewiki-violate-policy' => 'Nama wiki ini berisi kata yang melanggar kebijakan penamaan kami',
	'autocreatewiki-name-taken' => 'Wiki dengan nama ini sudah ada. Anda dipersilakan untuk bergabung dengan kami di <a href="http://$1.wikia.com">http:// $1.wikia.com</a>',
	'autocreatewiki-name-too-short' => 'Nama ini terlalu pendek. Silakan pilih nama setidaknya memiliki 3 karakter.',
	'autocreatewiki-name-too-long' => 'Nama ini terlalu panjang. Silakan pilih nama maksimal 50 karakter.',
	'autocreatewiki-similar-wikis' => 'Di bawah ini adalah wiki yang sudah dibuat dengan topik ini. Kami menyarankan penyuntingan salah satu dari mereka.',
	'autocreatewiki-invalid-username' => 'Nama pengguna ini tidak sah.',
	'autocreatewiki-busy-username' => 'Nama pengguna ini sudah digunakan.',
	'autocreatewiki-blocked-username' => 'Anda tak dapat membuat Akun.',
	'autocreatewiki-user-notloggedin' => 'Akun anda telah dibuat tetapi belum masuk log!',
	'autocreatewiki-empty-language' => 'Silakan pilih bahasa untuk wiki.',
	'autocreatewiki-empty-category' => 'Silakan pilih salah satu kategori.',
	'autocreatewiki-empty-wikiname' => 'Nama wiki tidak boleh kosong.',
	'autocreatewiki-empty-username' => 'Nama pengguna tidak boleh kosong.',
	'autocreatewiki-empty-password' => 'Kata sandi tidak boleh kosong.',
	'autocreatewiki-empty-retype-password' => 'Kata sandi ulang tidak boleh kosong.',
	'autocreatewiki-category-label' => 'Kategori:',
	'autocreatewiki-category-other' => 'Lainnya',
	'autocreatewiki-set-username' => 'Atur nama pengguna lebih dulu.',
	'autocreatewiki-invalid-category' => 'Nilai tidak sah dari kategori. 
Silakan pilih yang benar dari daftar pilihan.',
	'autocreatewiki-invalid-language' => 'Nilai tidak sah dari bahasa. 
Silakan pilih yang benar dari daftar pilihan.',
	'autocreatewiki-invalid-retype-passwd' => 'Silahkan ketik kembali kata kunci yang sama seperti di atas',
	'autocreatewiki-invalid-birthday' => 'Tanggal lahir tidak sah',
	'autocreatewiki-limit-birthday' => 'Tidak dapat membuat pendaftaran.',
	'autocreatewiki-log-title' => 'Wiki anda telah dibuat!',
	'autocreatewiki-step0' => 'Memulai proses ...',
	'autocreatewiki-stepdefault' => 'Proses berjalan, harap tunggu ...',
	'autocreatewiki-errordefault' => 'Proses belum selesai ...',
	'autocreatewiki-step1' => 'Membuat folder gambar ...',
	'autocreatewiki-step2' => 'Membuat basis data...',
	'autocreatewiki-step3' => 'Mengatur informasi baku dalam basis data...',
	'autocreatewiki-step4' => 'Menyalin gambar dan logo baku ...',
	'autocreatewiki-step5' => 'Pengaturan variabel baku dalam basis data ...',
	'autocreatewiki-step6' => 'Mengatur tabel baku dalam basis data...',
	'autocreatewiki-step7' => 'Menetapkan bahasa pemulai...',
	'autocreatewiki-step8' => 'Mengatur kelompok pengguna dan kategori ...',
	'autocreatewiki-step9' => 'Pengaturan variabel untuk wiki baru ...',
	'autocreatewiki-step10' => 'Mengatur halaman pada wiki pusat ...',
	'autocreatewiki-step11' => 'Mengirim surel ke pengguna ...',
	'autocreatewiki-redirect' => 'Pengalihan ke wiki baru: $1 ...',
	'autocreatewiki-congratulation' => 'Selamat!',
	'autocreatewiki-welcometalk-log' => 'Pesan Selamat Datang',
	'autocreatewiki-regex-error-comment' => 'digunakan dalam wiki $1 (semua teks: $2)',
	'autocreatewiki-step2-error' => 'Database ada!',
	'autocreatewiki-step3-error' => 'Tidak dapat mengatur informasi baku dalam basisdata!',
	'autocreatewiki-step6-error' => 'Dapat tidak menetapkan tabel baku dalam basisdata!',
	'autocreatewiki-step7-error' => 'Tidak dapat menyalin basisdata pemulai untuk bahasa!',
	'autocreatewiki-protect-reason' => 'Bagian dari antarmuka resmi',
	'autocreatewiki-welcomesubject' => '$1 telah dibuat!',
	'autocreatewiki-welcomebody' => 'Halo, $2, 

Permintaan Wikia Anda sekarang tersedia di <$1> Kami berharap dapat melihat Anda meyunting disana segera! 

Kami telah menambahkan beberapa Informasi dan Tips pada halaman Pembicaraan Pengguna Anda (<$5>) untuk membantu Anda memulai. 

Jika Anda memiliki masalah, Anda dapat meminta bantuan komunitas di wiki di <http://www.wikia.com/wiki/Forum:Help_desk> , Atau melalui surel ke community@wikia.com. Anda juga dapat mengunjungi kami ruang obrolan IRC #wikia <http://irc.wikia.com> . 

Saya dapat dihubungi langsung melalui email atau di halaman pembicaraan saya, jika Anda memiliki pertanyaan atau masalah. 

Semoga berhasil dengan proyek ini! 

$3 

Tim Komunitas Wikia 

<http://www.wikia.com/wiki/User:$4>', # Fuzzy
	'autocreatewiki-welcometalk' => "== Selamat Datang! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hi \$1 -- kami sangat gembira untuk memiliki '''\$4''' sebagai bagian dari komunitas Wikia! 

Sekarang Anda punya website secara utuh untuk diisi dengan informasi, gambar dan video tentang topik kesukaan Anda. Tapi sekarang, itu hanya halaman kosong mengunggu anda ... Menyeramkan, bukan? Berikut adalah beberapa cara untuk memulai. 

*'''Mengenalkan topik Anda''' di halaman depan. Ini adalah kesempatan Anda untuk menjelaskan kepada pembaca tentang topik Anda. Menulis sebanyak yang Anda inginkan! deskripsi Anda dapat menghubungkan ke semua halaman yang penting di situs Anda. 

*'''Mulai beberapa halaman baru''' - hanya satu atau dua kalimat baik untuk memulai. Jangan biarkan halaman kosong menunggu! Wiki adalah semua tentang menambah dan mengubah hal-hal selama Anda pergi. Anda juga dapat menambahkan gambar dan video, untuk mengisi halaman dan membuatnya lebih menarik. 

Dan kemudian teruskan! Orang-orang senang mengunjungi wiki ketika ada banyak hal untuk dibaca dan dilihat, sehingga terus menambahkan hal-hal lain, dan Anda akan menarik pembaca dan penyunting. Ada banyak yang harus dilakukan, tapi jangan khawatir - hari ini hari pertama Anda, dan Anda punya banyak waktu. Setiap wiki dimulai dengan cara yang sama - sedikit demi sedikit, dimulai dengan beberapa halaman pertama, sampai tumbuh menjadi situs yang besar dan sibuk. 

Jika Anda punya pertanyaan, Anda dapat mengirim kami sur-el melalui [[Special:Contact|formulir]]. Selamat bersenang-senang! 

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Wiki baru',
	'newwikisstart' => 'Tampilkan wiki diawali dengan:',
	'autocreatewiki-reminder-body' => 'Wahai $1:

Selamat atas dimulainya wiki, {{SITENAME}} baru Anda! Anda dapat kembali dan menambahkan lagi ke wiki Anda dengan mengunjungi $2.

Ini adalah proyek baru, jadi silahkan menulis kepada kami jika Anda memiliki pertanyaan!

-- Tim Komunitas Wikia',
	'autocreatewiki-reminder-body-HTML' => '<p>Wahai $1:</p>

<p>Selamat atas dimulainya wiki, {{SITENAME}} baru Anda! Anda dapat kembali dan menambahkan lagi ke wiki Anda dengan mengunjungi
<a href="$2">$2</a>.</p>

<p>Ini adalah proyek baru, jadi silahkan menulis kepada kami jika Anda memiliki pertanyaan!</p>

<p>-- Tim Komunitas Wikia</p>',
	'autocreatewiki-subname-answers' => 'Answers',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'autocreatewiki-category-select' => 'Kpàtá otụ',
	'autocreatewiki-category-label' => 'Ébéonọr:',
	'newwikis' => 'Wiki ne ohụru',
	'autocreatewiki-subname-answers' => 'Nza okwu',
);

/** Ingush (ГӀалгӀай)
 * @author Sapral Mikail
 */
$messages['inh'] = array(
	'autocreatewiki-category-label' => 'Цатег:',
	'newwikis' => 'Керда ВIикIаш',
	'autocreatewiki-subname-answers' => 'Жопдалараш',
);

/** Italian (italiano)
 * @author Gifh
 * @author Minerva Titani
 * @author Ximo17
 */
$messages['it'] = array(
	'autocreatewiki' => 'Crea una nuova wiki',
	'autocreatewiki-desc' => "Crea una wiki in WikiFactory su richiesta dell'utente",
	'autocreatewiki-page-title-default' => 'Crea una nuova wiki',
	'autocreatewiki-page-title-answers' => 'Crea un nuovo sito di Risposte',
	'createwiki' => 'Crea una nuova wiki',
	'autocreatewiki-chooseone' => 'Scegli...',
	'autocreatewiki-required' => '$1 = richiesto',
	'autocreatewiki-web-address' => 'Indirizzo web:',
	'autocreatewiki-category-select' => 'Scegli',
	'autocreatewiki-language-top' => '$1 lingue principali',
	'autocreatewiki-language-all' => 'Tutte le lingue',
	'autocreatewiki-birthdate' => 'Data di nascita:',
	'autocreatewiki-blurry-word' => 'Parola sfocata:',
	'autocreatewiki-remember' => 'Ricordami',
	'autocreatewiki-create-account' => 'Crea un account',
	'autocreatewiki-done' => 'fatto',
	'autocreatewiki-error' => 'errore',
	'autocreatewiki-haveaccount-question' => 'Hai già un account Wikia?',
	'autocreatewiki-success-title-default' => 'La tua wiki è stata creata!',
	'autocreatewiki-success-title-answers' => 'Il tuo sito di Risposte è stato creato!',
	'autocreatewiki-success-subtitle' => 'Ora puoi iniziare a lavorare nella tua wiki visitando:',
	'autocreatewiki-success-has-been-created' => 'è stata creata!',
	'autocreatewiki-success-get-started' => 'Per iniziare',
	'autocreatewiki-info-domain' => 'È meglio usare una parola che sia una possibile parola chiave per le ricerche sul tuo argomento.',
	'autocreatewiki-info-topic' => 'Aggiungi una breve descrizione come "Star Wars" o "Spettacoli televisivi"',
	'autocreatewiki-info-category-default' => 'Questa aiuterà i visitatori a trovare la tua wiki.',
	'autocreatewiki-info-category-answers' => 'Questa aiuterà i visitatori a trovare il tuo sito di Risposte.',
	'autocreatewiki-info-language' => 'Questa sarà la lingua di default per i visitatori della tua wiki.',
	'autocreatewiki-info-email-address' => 'Il tuo indirizzo e-mail non viene mai mostrato ad alcun utente di Wikia.',
	'autocreatewiki-info-realname' => 'Se si sceglie di fornirlo, questo verrà usato per attribuirti il lavoro effettuato.',
	'autocreatewiki-info-birthdate' => "Wikia richiede che tutti gli utenti forniscano la loro reale data di nascita sia come misura di sicurezza sia come un modo per preservare l'integrità del sito nel rispetto delle regole federali.",
	'autocreatewiki-info-blurry-word' => 'Per aiutarci a contrastare la creazione automatica di account, per favore inserisci la parola sfocata che vedi in questo campo.',
	'autocreatewiki-info-terms-agree' => 'Con la creazione di una wiki e di un account utente, accetti i <a href="http://www.wikia.com/wiki/Terms_of_use">Termini di utilizzo di Wikia</a>',
	'autocreatewiki-info-staff-username' => "<b>Solo staff:</b> L'utente specificato verrà indicato come il fondatore.",
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Oggi Wikia ha superato il numero massimo di creazioni di wiki ($1).',
	'autocreatewiki-limit-creation' => 'Hai superato il numero massimo di creazioni di wiki in 24 ore ($1).',
	'autocreatewiki-empty-field' => 'Si prega di compilare questo campo.',
	'autocreatewiki-bad-name' => 'Il nome non può contenere caratteri speciali (come $ o @) e deve essere una sola parola minuscola, senza spazi.',
	'autocreatewiki-invalid-wikiname' => 'Il nome non può contenere caratteri speciali (come $ o @) e non può essere vuoto',
	'autocreatewiki-violate-policy' => 'Il nome di questa wiki contiene una parola che viola la nostra politica di denominazione',
	'autocreatewiki-name-taken' => 'C\'è già una wiki con questo indirizzo. Contribuisci a <a href="http://$1.wikia.com">http://$1.wikia.com</a> o scegli un altro indirizzo.',
	'autocreatewiki-name-too-short' => 'Questo indirizzo è troppo breve. Per favore scegli un indirizzo con almeno 3 caratteri.',
	'autocreatewiki-name-too-long' => 'Questo indirizzo è troppo lungo. Per favore scegli un indirizzo con un massimo di 50 caratteri.',
	'autocreatewiki-similar-wikis' => 'Qui sotto trovi le wiki già create su questo argomento. Ti consigliamo di contribuire a una di queste.',
	'autocreatewiki-invalid-username' => 'Questo nome utente non è valido.',
	'autocreatewiki-busy-username' => 'Questo nome utente è già in uso.',
	'autocreatewiki-blocked-username' => 'Non puoi creare un account.',
	'autocreatewiki-user-notloggedin' => 'Il tuo account è stato creato ma non hai effettuato il login!',
	'autocreatewiki-empty-language' => 'Per favore scegli la lingua per la wiki.',
	'autocreatewiki-empty-category' => 'Per favore scegli una categoria.',
	'autocreatewiki-empty-wikiname' => 'Il nome della wiki non può essere vuoto.',
	'autocreatewiki-empty-username' => 'Il nome utente non può essere vuoto.',
	'autocreatewiki-empty-password' => 'La password non può essere vuota.',
	'autocreatewiki-empty-retype-password' => 'La ripetizione della password non può essere vuota.',
	'autocreatewiki-category-label' => 'Categoria:',
	'autocreatewiki-category-other' => 'Altro',
	'autocreatewiki-set-username' => 'Imposta prima il nome utente.',
	'autocreatewiki-invalid-category' => 'Valore della categoria non valido.
Per favore scegliene uno dal menu a comparsa.',
	'autocreatewiki-invalid-language' => 'Valore della lingua non valido.
Per favore scegliene uno dal menu a comparsa.',
	'autocreatewiki-invalid-retype-passwd' => 'Per favore ripeti la stessa password di prima',
	'autocreatewiki-invalid-birthday' => 'Data di nascita non valida',
	'autocreatewiki-limit-birthday' => 'Impossibile registrarti.',
	'autocreatewiki-log-title' => 'Stiamo creando la tua wiki',
	'autocreatewiki-step0' => 'Inizializzazione del processo ...',
	'autocreatewiki-stepdefault' => 'Il processo è in corso, per favore attendi ...',
	'autocreatewiki-errordefault' => 'Il processo non è ancora completato ...',
	'autocreatewiki-step1' => 'Creazione della cartella delle immagini ...',
	'autocreatewiki-step2' => 'Creazione del database ...',
	'autocreatewiki-step3' => 'Impostazione delle informazioni di default nel database ...',
	'autocreatewiki-step4' => 'Copia delle immagini e del logo di default ...',
	'autocreatewiki-step5' => 'Impostazione delle variabili di default nel database ...',
	'autocreatewiki-step6' => 'Impostazione delle tabelle di default nel database ...',
	'autocreatewiki-step7' => 'Impostazione dello starter della lingua ...',
	'autocreatewiki-step8' => 'Impostazione dei gruppi utente e delle categorie ...',
	'autocreatewiki-step9' => 'Impostazione delle variabili per la nuova wiki ...',
	'autocreatewiki-step10' => 'Impostazione delle pagine nella wiki centrale ...',
	'autocreatewiki-step11' => "Invio della email all'utente ...",
	'autocreatewiki-redirect' => 'Reindirizzamento alla nuova wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Congratulazioni!',
	'autocreatewiki-welcometalk-log' => 'Messaggio di benvenuto',
	'autocreatewiki-regex-error-comment' => 'usato nella wiki $1 (testo completo: $2)',
	'autocreatewiki-step2-error' => 'Il database esiste!',
	'autocreatewiki-step3-error' => 'Impossibile impostare le informazioni di default nel database!',
	'autocreatewiki-step6-error' => 'Impossibile impostare le tabelle di default nel database!',
	'autocreatewiki-step7-error' => 'Impossibile copiare il database dello starter per la lingua!',
	'autocreatewiki-protect-reason' => "Parte dell'interfaccia ufficiale",
	'autocreatewiki-welcomesubject' => '$1 è stata creata!',
	'autocreatewiki-welcomebody' => "Ciao $2!

Il tuo wiki è stato creato ed è ora disponibile su <$1>.<br />

Pronto ad iniziare? Abbiamo aggiunto alcuni link alla tua pagina di discussione (<$5>) per aiutarti e per farti esplorare tutte le aree di Wikia. Per qualunque domanda o problema, puoi chiedere aiuto alla community alla pagina <http://it.community.wikia.com/wiki/Forum:Index> o contattare lo staff per email all'indirizzo community@wikia.com. 

Puoi inoltre visitare il blog Founder & Admin <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> e il blog dello staff di Wikia <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> dove puoi trovare suggerimenti e trucchi, oltre alle info sulle novità di Wikia.

Buon progetto!

$3 

Wikia Community Team
<http://www.wikia.com/wiki/User:$4>

___________________________________________
* Non vuoi più ricevere i nostri messaggi? Puoi modificare le preferenze sulla ricezione delle email qui: http://community.wikia.com/Special:Preferences",
	'autocreatewiki-welcometalk' => "== Benvenuto! ==
<div style=\"font-size:120%; line-height:1.2em;\">Ciao \$1! Siamo molto contenti di avere '''\$4''' nella nostra community Wikia !   Grazie per la tua collaborazione! Ti vogliamo dare alcuni suggerimenti per aiutarti a mettere in moto la tua wiki.

=== '''I tuoi primi quattro passi''' ===
1. '''Crea la tua [[Utente:\$1|Pagina Utente]]''' - è il posto per parlare di te stesso e farti conoscere (e fare pratica!)

2. '''Aggiungi un logo''' - impara [[w:c:aiuto:Aiuto:Theme_Designer|come creare un logo]], e poi <span class=\"plainlinks\">[[Speciale:Carica/Wiki.png|clicca qui]]</span> per aggiungerlo alla tua wiki.
<div style=\"border: 1px solid black; margin: 0px 0px 5px 10px; padding: 5px; float: right; width: 30%;\"><center>Crea un articolo per questa wiki:</center><createbox>
width=20
</createbox></div>

3. '''Crea i tuoi primi 10 articoli''' - usa il campo sulla destra per creare la pagine, iniziando con poche righe per ogni articolo.

4. '''Modifica la pagina principale''' - clicca sul logo e raggiungi la pagina principale. Ricordati di aggiungere dei link interni ([[come questo]]) per raggiungere le nuove pagine che hai appena creato.

Dopo aver seguito tutti i passi sei già a buon punto! La tua wiki deve sembrare attiva ed aperta ai nuovi utenti. Puoi sempre chiedere ai tuoi amici di aiutarti, oppure invitare nuove persone a creare nuovi articoli o modificare quelli già esistenti.

Più pagine e link vengono creati e più velocemente la tua wiki diventerà popolare. I visitatori che cercheranno \"\$4\" saranno in grado di trovarlo facilmente.

Per qualunque altre domanda, puoi leggere le [[w:c:Aiuto:Aiuto_Wiki|pagine di aiuto]], oppure spedirci un'e-mail attraverso il nostro [[Special:Contact|modulo dei contatti]]. Non dimenticare di controllare le altre wiki su [[wikia:Wikia|Wikia]] per idee, template, layout e molto altro!

Buona fortuna! 

[[User:\$2|\$3]] <staff /></div>", # Fuzzy
	'newwikis' => 'Nuove wiki',
	'newwikisstart' => 'Mostra le wiki a partire da:',
	'autocreatewiki-subname-answers' => 'Risposte',
);

/** Japanese (日本語)
 * @author Naohiro19
 * @author Shirayuki
 * @author Tommy6
 * @author 青子守歌
 */
$messages['ja'] = array(
	'autocreatewiki' => '新しいWikiを作成する',
	'autocreatewiki-desc' => '利用者からのリクエストによりWikiFactoryでウィキを作成する',
	'autocreatewiki-page-title-default' => '新しいウィキの作成',
	'autocreatewiki-page-title-answers' => '新しいQ&amp;Aサイトの作成',
	'createwiki' => '新しいウィキのお申し込みはこちら!',
	'autocreatewiki-chooseone' => '一つを選ぶ',
	'autocreatewiki-required' => '$1 = 必須',
	'autocreatewiki-web-address' => 'サイトのアドレス:',
	'autocreatewiki-category-select' => '1つを選択',
	'autocreatewiki-language-top' => '上位$1言語',
	'autocreatewiki-language-all' => 'すべての言語',
	'autocreatewiki-birthdate' => '生年月日:',
	'autocreatewiki-blurry-word' => '画像認証:',
	'autocreatewiki-remember' => 'パスワードを記憶',
	'autocreatewiki-create-account' => 'アカウントを作成する',
	'autocreatewiki-done' => '完了',
	'autocreatewiki-error' => 'エラー',
	'autocreatewiki-haveaccount-question' => 'すでにウィキアのアカウントをお持ちですか？',
	'autocreatewiki-success-title-default' => 'ウィキが作成されました！',
	'autocreatewiki-success-title-answers' => 'Q&amp;Aサイトが作成されました！',
	'autocreatewiki-success-subtitle' => '下記のURLをクリックして作業を開始できます',
	'autocreatewiki-success-has-been-created' => 'が作成されました！',
	'autocreatewiki-success-get-started' => 'さあ始めましょう',
	'autocreatewiki-info-domain' => 'ウィキが扱う内容を表し、検索キーワードとなるようなものがよいでしょう。',
	'autocreatewiki-info-topic' => '"Star Wars"や"テレビ番組"など、ウィキの主題を簡単に示すような名称にしましょう。',
	'autocreatewiki-info-category-default' => '作成したサイトを訪問者が見つけるられるような手がかりにするためのものです。',
	'autocreatewiki-info-category-answers' => '作成したサイトを訪問者が見つけるられるような手がかりにするためのものです。',
	'autocreatewiki-info-language' => 'ここで指定した言語が、ウィキの訪問者に対して標準で表示される言語になります。',
	'autocreatewiki-info-email-address' => 'あなたのメールアドレスがウィキア上で誰かに直接知らされることはありません。',
	'autocreatewiki-info-realname' => '本名を入力すると、ページ・クレジットに利用者名（アカウント名）の代わりに本名が表示されます。',
	'autocreatewiki-info-birthdate' => 'ウィキアでは、アメリカ合衆国の法規定を満たす上で、サイトの品質を維持するための手段及び安全のための予防策としてすべての利用者に対して生年月日の入力を求めています。',
	'autocreatewiki-info-blurry-word' => 'ツールなどによる自動アカウント作成を防ぐため、画像で表示された文字を入力してください。',
	'autocreatewiki-info-terms-agree' => 'ウィキ及びアカウントを作成すると、<a href="http://www.wikia.com/wiki/Terms_of_use">ウィキアの利用規約</a>（<a href="http://ja.wikia.com/wiki/%E5%88%A9%E7%94%A8%E8%A6%8F%E7%B4%84">非公式日本語訳</a>）に同意したことになります。',
	'autocreatewiki-info-staff-username' => '<b>スタッフオンリー:</b> 指定されたユーザーが設立者としてリストされます。',
	'autocreatewiki-title-template' => '$1 ウィキ',
	'autocreatewiki-limit-day' => '一日にウィキアが作成可能なウィキの最大数を超えています。($1)',
	'autocreatewiki-limit-creation' => '24時間であなたが作成できるウィキの最大数を超えています。($1)',
	'autocreatewiki-empty-field' => 'この項目は空白にはできません。',
	'autocreatewiki-bad-name' => 'URLには$や@などの文字は使えません。また、ローマ字は全てスペースなしの小文字でなければなりません。',
	'autocreatewiki-invalid-wikiname' => '&quot;&lt;&quot;など、一部の文字はウィキ名に使用できません。また、空白にもできません。',
	'autocreatewiki-violate-policy' => 'このウィキ名には、ウィキアの方針上問題のある単語が含まれています。',
	'autocreatewiki-name-taken' => 'この名称のウィキは既にあります。<a href="http://$1.wikia.com">http://$1.wikia.com</a> に参加するか別のアドレスを設定してください。',
	'autocreatewiki-name-too-short' => 'アドレスが短すぎます。3文字以上のアドレスを指定してください。',
	'autocreatewiki-name-too-long' => 'アドレスが長すぎます。50文字以下のアドレスを指定してください。',
	'autocreatewiki-similar-wikis' => 'この主題について扱っているウィキとして下記のようなものがすでに存在します。これらのうちのどれかを編集することをお勧めいたします。',
	'autocreatewiki-invalid-username' => 'この利用者名は不適切です。',
	'autocreatewiki-busy-username' => 'この利用者名はすでに使われています。',
	'autocreatewiki-blocked-username' => 'アカウントを作成できません。',
	'autocreatewiki-user-notloggedin' => 'アカウントは作成されましたがログイン状態になっていません！',
	'autocreatewiki-empty-language' => 'ウィキで使用する言語を選んでください。',
	'autocreatewiki-empty-category' => 'どれか一つカテゴリを選んでください。',
	'autocreatewiki-empty-wikiname' => 'ウィキ名は空白にはできません。',
	'autocreatewiki-empty-username' => '利用者名は空にはできません。',
	'autocreatewiki-empty-password' => 'パスワードは空にはできません。',
	'autocreatewiki-empty-retype-password' => 'パスワードの再入力が空です。',
	'autocreatewiki-category-label' => 'カテゴリ：',
	'autocreatewiki-category-other' => 'その他',
	'autocreatewiki-set-username' => 'まず利用者名を設定してください。',
	'autocreatewiki-invalid-category' => 'カテゴリの値が不適切です。ドロップダウンリストから適切なものを選んでください。',
	'autocreatewiki-invalid-language' => '言語の値が不適切です。ドロップダウンリストから適切なものを選んでください。',
	'autocreatewiki-invalid-retype-passwd' => '上のパスワードと同じものを再入力してください。',
	'autocreatewiki-invalid-birthday' => '不適切な生年月日です',
	'autocreatewiki-limit-birthday' => '登録できません。',
	'autocreatewiki-log-title' => 'ウィキが作成されています...',
	'autocreatewiki-step0' => 'プロセスを初期化しています...',
	'autocreatewiki-stepdefault' => 'プロセスが進行中です, お待ちください...',
	'autocreatewiki-errordefault' => 'プロセスが完了しませんでした。',
	'autocreatewiki-step1' => 'imagesフォルダを作成しています...',
	'autocreatewiki-step2' => 'データベースを作成しています...',
	'autocreatewiki-step3' => 'データベースに初期情報を設定しています...',
	'autocreatewiki-step4' => '初期設定画像とロゴをコピーしています...',
	'autocreatewiki-step5' => 'データベースに初期変数を設定しています...',
	'autocreatewiki-step6' => 'データベースに初期テーブルを設定しています...',
	'autocreatewiki-step7' => '標準言語のスターターを設定しています...',
	'autocreatewiki-step8' => '利用者グループ及びカテゴリを設定しています...',
	'autocreatewiki-step9' => '新しいウィキに変数を設定しています...',
	'autocreatewiki-step10' => 'セントラルウィキアにページを設置しています...',
	'autocreatewiki-step11' => '利用者にメールを送信しています...',
	'autocreatewiki-redirect' => '新しいウィキに転送しています: $1 ...',
	'autocreatewiki-congratulation' => 'Congratulations!',
	'autocreatewiki-welcometalk-log' => '自動メッセージ',
	'autocreatewiki-regex-error-comment' => 'ウィキ $1 で使用されています（全文: $2）',
	'autocreatewiki-step2-error' => 'データベースは既に存在します！',
	'autocreatewiki-step3-error' => 'データベースに初期情報を設定できません！',
	'autocreatewiki-step6-error' => 'データベースに初期テーブルを設定できません！',
	'autocreatewiki-step7-error' => 'スターターのデータベースをコピーできません！',
	'autocreatewiki-protect-reason' => '公式インターフェースの一部です',
	'autocreatewiki-welcomesubject' => '$1 が作成されました！',
	'autocreatewiki-welcomebody' => '$2 さん、

申請ありがとうございます。申請されたウィキアは <$1> で利用可能です。すぐにでも編集を始めてくれるとこちらとしてもうれしく思います。

$2さんの会話ページ <$5> に、利用にあたっての情報などを追加しておきました。また、<http://ja.wikia.com/wiki/Help:%E3%83%88%E3%83%83%E3%83%97%E3%83%9A%E3%83%BC%E3%82%B8> にヘルプも用意されています。何か問題があったときは、フォーラム <http://ja.wikia.com/wiki/Forum:Index> でお尋ねください。また、freenode上のIRCチャンネル #wikia-ja でウィキを問わずコミュニティの方々が議論をしていますので、アドバイスが欲しい場合は遠慮無くログインしてみてください。

それでは、プロジェクトの今後を期待しております。

$3
コミュニティ・チーム
<http://www.wikia.com/wiki/User:$4>', # Fuzzy
	'autocreatewiki-welcometalk' => "== ようこそ！ ==
<div style=\"font-size:120%; line-height:1.2em;\">こんにちは、\$1さん。'''\$4'''がウィキアのコミュニティーの一部になったこと、とても嬉しく思います！

既に、自身のお気に入りの話題に関して、ウェブサイト全体をいっぱいにするだけの情報や画像、動画をお持ちでしょう。しかし現在、空白のページが目の前にあります・・・。不安ですね？ここに、始めるための、いくつかの方法があります。

* '''話題に関する紹介'''を、フロントページに追加してください。ここは、読者に対して、話題が何についてであるかを説明する機会となっています。望むだけ書いてください！この説明は、サイト上のすべての重要なページからリンクさせることができます。

* '''新しいページを開始''' -- 開始には、単純な1-2行で、十分です。空白のページから目を背けないように！ウィキは、やりたいように追加や変更をするものです。ページをよりおもしろいものにするために、画像や動画を追加することもできます。

そして、これらをどんどん続けて言ってください！人々は、読んだり見たりするものがたくさんウィキを訪問し好きになります。ですから、内容を追加し続けていれば、読者あるいは編集者を惹きつけることができるでしょう。やるべきことはたくさんありますが、心配しないでください -- 今日は初日で、これから十分な時間があります。どのウィキも同じ方法ではじまったのです -- 一度に少しずつ、最初は少ないページではじまり、そのウィキは巨大で忙しいサイトになったのです。

もし質問がありましたら、[[Special:Contact|連絡フォーム]]からメールをお使いください。では、楽しんでください！

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => '新しいウィキ',
	'newwikisstart' => '次の文字列から始まるウィキを表示:',
	'autocreatewiki-reminder-body' => '$1 さん、

新しいウィキの開始おめでとうございます。$1 さんが作成した $2 には、いつでも戻って情報を追加することができます。

このプロジェクトはできたばかりの状態です。もし、何か質問があれば、私たちまでおたずねください。

-- Wikia Community Team',
	'autocreatewiki-reminder-body-HTML' => '<p>$1 さん、</p>
<p>新しいウィキの開始おめでとうございます。$1 さんが作成した <a href="$2">$2</a> には、いつでも戻って情報を追加することができます。</p>
<p>このプロジェクトはできたばかりの状態です。もし、何か質問があれば、私たちまでおたずねください。</p>
<p>-- Wikia Community Team</p>',
	'autocreatewiki-subname-answers' => 'Answers',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'autocreatewiki' => 'បង្កើតវិគីថ្មីមួយ',
	'autocreatewiki-desc' => 'បង្កើតវិគីក្នុង WikiFactory តាមសំណើរបស់អ្នកប្រើប្រាស់',
	'autocreatewiki-page-title-default' => 'បង្កើតវិគីថ្មីមួយ',
	'createwiki' => 'បង្កើតវិគីថ្មីមួយ',
	'autocreatewiki-chooseone' => 'ជ្រើសរើសមួយ',
	'autocreatewiki-required' => '$1 = ចាំបាច់',
	'autocreatewiki-web-address' => 'អាសយដ្ឋានវិប៖',
	'autocreatewiki-category-select' => 'ជ្រើសរើសមួយ',
	'autocreatewiki-language-top' => 'ភាសាចំនួន $1 លើគេ',
	'autocreatewiki-language-all' => 'ភាសាទាំងអស់',
	'autocreatewiki-birthdate' => 'ថ្ងៃ​ខែ​ឆ្នាំកំណើត​៖',
	'autocreatewiki-remember' => 'ចងចាំខ្ញុំ',
	'autocreatewiki-create-account' => 'បង្កើតគណនីមួយ',
	'autocreatewiki-done' => 'រួចរាល់',
	'autocreatewiki-error' => 'បញ្ហា',
	'autocreatewiki-haveaccount-question' => 'តើអ្នកមានគណនី Wikia មួយហើយឬនៅ?',
	'autocreatewiki-success-title-default' => 'វិគីរបស់អ្នកត្រូវបានបង្កើតហើយ!',
	'autocreatewiki-success-subtitle' => 'ឥលូវនេះអ្នកអាចចាប់ផ្ដើមធ្វើការងារលើវិគីរបស់អ្នកដោយចូលទៅទស្សនា៖',
	'autocreatewiki-success-has-been-created' => 'ត្រូវបានបង្កើតហើយ!',
	'autocreatewiki-success-get-started' => 'ចាប់ផ្ដើម',
	'autocreatewiki-info-email-address' => 'អាសដ្ឋានអ៊ីមែលរបស់អ្នកនឹងមិនត្រូវបង្ហាញអោយនរណាម្នាក់ឃើញឡើយនៅលើ Wikia។',
	'autocreatewiki-info-realname' => ' បើអ្នកផ្ដល់ឱ្យ វានឹងត្រូវបានប្រើប្រាស់់ដើម្បីបញ្ជាក់ភាពជាម្ចាស់​លើការរួមចំណែក​នានា​របស់អ្នក។',
	'autocreatewiki-invalid-username' => 'អត្តនាមនេះគ្មានសុពលភាពទេ',
	'autocreatewiki-busy-username' => 'អត្តនាមនេះត្រូវបានគេយកប្រើហើយ។',
	'autocreatewiki-blocked-username' => 'មិនអាចបង្កើតគណនីបានទេ។',
	'autocreatewiki-user-notloggedin' => 'គណនីរបស់អ្នកត្រូវបានបង្កើត ប៉ុន្តែមិនទាន់បានកត់ឈ្មោះចូលទេ!',
	'autocreatewiki-empty-language' => 'សូមជ្រើសរើសភាសាសំរាប់វិគីនេះ។',
	'autocreatewiki-empty-category' => 'សូមជ្រើសរើសចំណាត់ថ្នាក់ក្រុមមួយ។',
	'autocreatewiki-empty-wikiname' => 'ឈ្មោះរបស់វិគីនេះមិនអាចនៅទទេបានទេ។',
	'autocreatewiki-empty-username' => 'អត្តនាមមិនអាចនៅទទេបានទេ។',
	'autocreatewiki-empty-password' => 'ពាក្យសំងាត់មិនអាចនៅទទេបានទេ។',
	'autocreatewiki-empty-retype-password' => 'ពាក្យសំងាត់វាយបញ្ចូលឡើងវិញមិនអាចនៅទទេបានទេ។',
	'autocreatewiki-category-label' => 'ចំណាត់ថ្នាក់ក្រុម៖',
	'autocreatewiki-category-other' => 'ផ្សេងទៀត',
	'autocreatewiki-set-username' => 'ដាក់អត្តនាមមុន។',
);

/** Korean (한국어)
 * @author Cafeinlove
 */
$messages['ko'] = array(
	'autocreatewiki' => '새 위키 만들기',
	'autocreatewiki-page-title-default' => '새 위키 만들기',
	'createwiki' => '새 위키 만들기',
	'autocreatewiki-language-all' => '모든 언어',
	'autocreatewiki-create-account' => '회원가입',
	'autocreatewiki-error' => '오류',
	'autocreatewiki-haveaccount-question' => '위키아에 회원가입하시겠습니까?',
	'autocreatewiki-success-title-default' => '위키가 생성되었습니다!',
	'autocreatewiki-success-subtitle' => '다음 링크를 방문해 위키에서 활동을 시작할 수 있습니다.',
	'autocreatewiki-success-has-been-created' => '생성되었습니다!',
	'autocreatewiki-success-get-started' => '시작하기',
	'newwikis' => '새로 만들어진 위키',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'autocreatewiki' => 'E neu Wiki opmaache',
	'autocreatewiki-desc' => 'Määt e neu Wiki en de Wiki_Fabrek wi ene Metmaacher et well.',
	'autocreatewiki-page-title-default' => 'E neu Wiki opmaache',
	'autocreatewiki-page-title-answers' => 'Maach en neu ẞait för Antwoote',
	'createwiki' => 'E neu Wiki opmaache',
	'autocreatewiki-chooseone' => 'Donn eine ußwähle',
	'autocreatewiki-required' => '$1 = nüüdesch',
	'autocreatewiki-web-address' => 'Web-Adräß:',
	'autocreatewiki-category-select' => 'Donn eine ußwähle',
	'autocreatewiki-language-top' => 'Bövverste $1 Shprooche
', # Fuzzy
	'autocreatewiki-language-all' => 'All Schprooche',
	'autocreatewiki-birthdate' => 'Jebootsdachs_Dattum',
	'autocreatewiki-blurry-word' => 'Verwaggelt Wood:',
	'autocreatewiki-remember' => 'Op Duur enlogge',
	'autocreatewiki-create-account' => 'Ene neue Metmaacher aanmelde',
	'autocreatewiki-done' => 'jedonn',
	'autocreatewiki-error' => 'Fähler',
	'autocreatewiki-haveaccount-question' => 'Häß De ald ene Zohjang op Wikia?',
	'autocreatewiki-success-title-default' => 'Ding Wiki es jäz aanjelaat!',
	'autocreatewiki-success-title-answers' => 'Ding ẞait met Antwoote es jäz aanjelaat!',
	'autocreatewiki-success-subtitle' => 'Do kanns tiräk en Dingem Wiki aanfange. Jangk doför noh:',
	'autocreatewiki-success-has-been-created' => 'wood aanjelaat!',
	'autocreatewiki-success-get-started' => 'Donn aanfange',
	'autocreatewiki-info-domain' => 'Et beß nemm e Wood, wat jähn zom Söhke noh Dingem Teema jenumme weed.',
	'autocreatewiki-info-topic' => 'Et beß donn ene knackije, kloore Bejreff dobei, esu wi „kölsche Fasterleer“ udder „Färsesändonge“.',
	'autocreatewiki-info-category-default' => 'Dat hellef de Besöker, Ding Wiki ze fenge.',
	'autocreatewiki-info-category-answers' => 'Dat hellef de Besöker, Ding Antwoote-ẞait ze fenge.',
	'autocreatewiki-info-language' => 'Dat weet de standattmääßejje Shprooch för de Besöker vun Dingem Wiki.',
	'autocreatewiki-info-email-address' => 'Ding Adräß för de <i lang="en">e-mail</i> kritt nie Eine aanjezeish op Wikia.',
	'autocreatewiki-info-realname' => 'Dinge richtije Name kanns De fott looße — wann De en ävver nenne wells, dann weed dä jebruch, öm Ding Beidräch domet ze schmöcke.',
	'autocreatewiki-info-birthdate' => 'Wikia well vun alle Metmaacher et reshtije Jebootß_Dattum han, zor Sesherheid un och um sing ẞait iehre Zosammehalt ze schöze un dobei Vörschreffte vun de USA ze befollje.',
	'autocreatewiki-info-blurry-word' => 'Öm ons jääje automattesch aanjelaate Zohjäng nohm Wiki ze schöze,
wulle mer, dat De dat verwaggelt Woot, wat De heh sühß, en heh dat Feld entipps.',
	'autocreatewiki-info-terms-agree' => 'Mem Wiki Opmaache un mem Zohjang Aanlääje, deihß De automattesch dä <a href="http://www.wikia.com/wiki/Terms_of_use">Rääjelle un Bedengonge för Wikia ze benöze</a> zohshtemme.',
	'autocreatewiki-info-staff-username' => '<b>Bloß för et Päsonaal:</b> Dä aanjejovve Metmaacher weed als der Jrönder vum Wiki opjeföhrt.',
	'autocreatewiki-title-template' => 'Et $1 Wiki',
	'autocreatewiki-limit-day' => 'För hück es de zohjelohße Aanzahl Wikis op Wikia ald aanjelaat ($1)',
	'autocreatewiki-limit-creation' => 'Do häs de zohjelohße Aanzahl Wikis övverschredde, di mer en 24 Shtonde opmaache kann ($1)',
	'autocreatewiki-empty-field' => 'Bes esu jood, un föll dat Feld uß.',
	'autocreatewiki-bad-name' => 'En däm Name künne kein Sönderzeishe (wi $ udder @) sin, un dä moß e einzel Woot us kleine Boochshtaabe der ohne Zwescheräum sin.',
	'autocreatewiki-invalid-wikiname' => 'En däm Name künne kein Sönderzeishe (wi $ udder @) sin, un läddesch lohße jeiht och nit.',
	'autocreatewiki-violate-policy' => 'En däm name för et Wiki es e Woot, wat uns Rääjelle nit zohlohße.',
	'autocreatewiki-name-taken' => 'Et jitt ald e Wiki met dä Adräß. Jangk op <a href="http://$1.wikia.com">http://$1.wikia.com</a> udder söhk Der en andere Adräss uß.',
	'autocreatewiki-name-too-short' => 'Di Adräß es ze koot. Söhk Der ein met winnishßdens 3 Zeijshe us.',
	'autocreatewiki-name-too-long' => 'Di Adräß es ze lang. Söhk Der ein met hüüshßdens 50 Zeijshe us.',
	'autocreatewiki-similar-wikis' => 'Onge shtonn de Wikis zom Teema, di et als jit. Mer schlonn vör, en einem vun dänne ze schrieve.',
	'autocreatewiki-invalid-username' => 'Dä Name es för ene Metmaacher nit jöltesh.',
	'autocreatewiki-busy-username' => 'Dä Name för ene Metmaacher weed ald jebruch.',
	'autocreatewiki-blocked-username' => 'Do darfs keine Zohjang aanlääje.',
	'autocreatewiki-user-notloggedin' => 'Dinge Zohjang es aanjelaat, De bes ävver doh nit enjelogg!',
	'autocreatewiki-empty-language' => 'Söhg en Shprooch för Ding Wiki uß.',
	'autocreatewiki-empty-category' => 'Donn en Kattejori ußsöhke.
', # Fuzzy
	'autocreatewiki-empty-wikiname' => 'Dä Name för dat Wiki kann nit läddesh sin.',
	'autocreatewiki-empty-username' => 'Ene Name för ene Metmacher kann nit läddesch sin.',
	'autocreatewiki-empty-password' => 'E Paßwoot kann nit läddesch sin.',
	'autocreatewiki-empty-retype-password' => 'Et Paßwoot widderhollt kann nit läddesch sin.',
	'autocreatewiki-category-label' => 'Saachjropp:', # Fuzzy
	'autocreatewiki-category-other' => 'Ander',
	'autocreatewiki-set-username' => 'Lääsh et eez ene Metmaaacher_Name faß.',
	'autocreatewiki-invalid-category' => 'Dat es ene onjölteje Saachjripp.
Donn eine ööhndlesch uß dä Leß ußwähle.
', # Fuzzy
	'autocreatewiki-invalid-language' => 'Dat es ene onjölteje Shprooch.
Donn eine ööhndlesch uß dä Leß ußwähle.
', # Fuzzy
	'autocreatewiki-invalid-retype-passwd' => 'Bes esu jood, un jiv et sellve Paßwoot en wi bovve.',
	'autocreatewiki-invalid-birthday' => 'Dat Dattum vun de Jeboot es nit jöltesch.',
	'autocreatewiki-limit-birthday' => 'Aanmällde jeiht nit.', # Fuzzy
	'autocreatewiki-log-title' => 'Ding Wiki weed jraad aanjelaat',
	'autocreatewiki-step0' => 'Ben dä Vörjang aam aanshtüßße&nbsp;…',
	'autocreatewiki-stepdefault' => 'Dä Vörjang es aam loufe, waadt&nbsp;…',
	'autocreatewiki-errordefault' => 'Dä Vörjang es nit fäädesch jewoode&nbsp;…',
	'autocreatewiki-step1' => 'Ben et Verzeishneß för Belder aam aanlääje&nbsp;…',
	'autocreatewiki-step2' => 'Ben de Daatebangk aam aanlääje&nbsp;…',
	'autocreatewiki-step3' => 'Ben de Standatt_Enfommazjuhne en de Daatebangk aam donn&nbsp;…',
	'autocreatewiki-step4' => 'Ben de Shtandatt_Belder un et Logo aam kopeeree&nbsp;…',
	'autocreatewiki-step5' => 'Ben de Standatt_Varijaable en de Daatebangk aam donn&nbsp;…',
	'autocreatewiki-step6' => 'Ben de Shtandatt_Tabälle en de Daatebangk aam aanlääje&nbsp;…',
	'autocreatewiki-step7' => 'Ben de Shprooche ier Aanfäng aam opsäze&nbsp;…',
	'autocreatewiki-step8' => 'Ben de Metmaacherjroppe un Saachjroppe aam aanlääje&nbsp;…',
	'autocreatewiki-step9' => 'Ben de Varijaable för et neue Wiki aam opsäze&nbsp;…',
	'autocreatewiki-step10' => 'Ben de Sigge em zentraale Wiki aam aanlääje&nbsp;…',
	'autocreatewiki-step11' => 'Ben <i lang="en">e-mails</i> aan de Metmaacher aam schecke&nbsp;…',
	'autocreatewiki-redirect' => 'Ben aam ömleide op et neue Wiki: $1&nbsp;…',
	'autocreatewiki-congratulation' => 'Uns Jlöckwönsch!',
	'autocreatewiki-welcometalk-log' => 'Wellkummens_Nohreesh',
	'autocreatewiki-regex-error-comment' => 'weed jebruch em Wiki $1 (der janze Täx: $2)',
	'autocreatewiki-step2-error' => 'De Daatebangk jidd_et ald!',
	'autocreatewiki-step3-error' => 'Kann de Standatt_Enfommazjuhne nit en de Daatebangk donn!',
	'autocreatewiki-step6-error' => 'Kann de Shtandatt_Tabälle en de Daatebangk nit aanlääje!',
	'autocreatewiki-step7-error' => 'Kann de Shprooche ier Aanfäng nit opsäze!',
	'autocreatewiki-protect-reason' => 'Deil vun de offizjälle Schnettshtäll',
	'autocreatewiki-welcomesubject' => '$1 es aanjelaat woode!',
	'newwikis' => 'Neu Wikis',
	'newwikisstart' => 'Wikis aanzeije af:',
	'autocreatewiki-reminder-body' => 'Hallo $1,

Uns Jlöckwönsch för {{SITENAME}}! Ding neu Wiki e opjesaz. Do kann widder kumme u mieh en Ding Wiki eren schriive, endämm dat De op $2 jeihß.

Dat es e brandneu Projäk, un wann De Froore häß, schriiv ons dovun!

-- Et Wikia Jmeinschaffs-Team',
	'autocreatewiki-subname-answers' => 'Antwoote',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'autocreatewiki-language-all' => 'Hemû ziman',
	'autocreatewiki-done' => 'çêbû',
	'autocreatewiki-category-label' => 'Kategorî:',
	'autocreatewiki-subname-answers' => 'Bersiv',
);

/** Latin (Latina)
 * @author Rsa23899
 */
$messages['la'] = array(
	'autocreatewiki-category-label' => 'Categoria:',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'autocreatewiki' => 'Eng nei Wiki uleeën',
	'autocreatewiki-page-title-default' => 'Eng nei Wiki uleeën',
	'createwiki' => 'Eng nei Wiki uleeën',
	'autocreatewiki-chooseone' => 'Eng eraussichen',
	'autocreatewiki-category-select' => 'Eng eraussichen',
	'autocreatewiki-language-top' => 'Top $1 Sproochen',
	'autocreatewiki-language-all' => 'All Sproochen',
	'autocreatewiki-birthdate' => 'Gebuertsdatum:',
	'autocreatewiki-remember' => 'Sech u mech erënneren',
	'autocreatewiki-done' => 'fäerdeg',
	'autocreatewiki-error' => 'Feeler',
	'autocreatewiki-success-get-started' => 'Ufänken',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-invalid-username' => 'Dëse Benotzernumm ass net valabel.',
	'autocreatewiki-busy-username' => 'Dëse Benotzernumm gëtt scho benotzt.',
	'autocreatewiki-empty-category' => 'Sicht w.e.g. eng Kategorie eraus.',
	'autocreatewiki-empty-wikiname' => 'Den NUmm vun der Wiki däerf net eidel sinn.',
	'autocreatewiki-empty-username' => 'De Benotzernumm kann net eidel sinn.',
	'autocreatewiki-empty-password' => "D'Passwuert kann net eidel sinn.",
	'autocreatewiki-category-label' => 'Kategorie:',
	'autocreatewiki-category-other' => 'Anerer',
	'autocreatewiki-log-title' => 'Är Wiki gëtt ugeluecht',
	'autocreatewiki-congratulation' => 'Gratulatioun!',
	'autocreatewiki-welcometalk-log' => 'Wëllkommensmessage',
	'autocreatewiki-step2-error' => "D'Datebank gëtt et!",
	'newwikis' => 'Nei Wikien',
	'autocreatewiki-subname-answers' => 'Äntwerten',
);

/** Lezghian (лезги)
 * @author Namik
 */
$messages['lez'] = array(
	'autocreatewiki-page-title-default' => 'Туькlурун цlийи вики',
);

/** Lithuanian (lietuvių)
 * @author Cyklopas
 * @author Eitvys200
 */
$messages['lt'] = array(
	'autocreatewiki' => 'Sukurti naują wiki',
	'autocreatewiki-desc' => 'Sukurti wiki WikiFactory pagal vartotojų prašymus',
	'autocreatewiki-page-title-default' => 'Sukurti naują wiki',
	'autocreatewiki-page-title-answers' => 'Sukurti naują atsakymų svetainę',
	'createwiki' => 'Sukurti naują wiki',
	'autocreatewiki-chooseone' => 'Pasirinkite vieną',
	'autocreatewiki-required' => '$1 = būtina',
	'autocreatewiki-web-address' => 'Tinklalapio adresas:',
	'autocreatewiki-category-select' => 'Pasirinkite vieną',
	'autocreatewiki-language-top' => 'Top $1 kalbos',
	'autocreatewiki-language-all' => 'Visos kalbos',
	'autocreatewiki-birthdate' => 'Gimimo data:',
	'autocreatewiki-blurry-word' => 'Neryškus žodis:',
	'autocreatewiki-remember' => 'Prisiminti mane',
	'autocreatewiki-create-account' => 'Sukurti sąskaitą',
	'autocreatewiki-done' => 'atlikta',
	'autocreatewiki-error' => 'klaida',
	'autocreatewiki-haveaccount-question' => 'Ar jau turite Wikia sąskaitą?',
	'autocreatewiki-success-title-default' => 'Jūsų wiki buvo sukurta!',
	'autocreatewiki-success-title-answers' => 'Jūsų atsakymų svetainė buvo sukurta!',
	'autocreatewiki-success-subtitle' => 'Dabar galite pradėti dirbti su jūsų wiki, apsilankę:',
	'autocreatewiki-success-has-been-created' => 'buvo sukurta!',
	'autocreatewiki-success-get-started' => 'Pradėkite',
	'autocreatewiki-info-topic' => 'Pridėkite trumpą aprašymą, pavyzdžiui, "Žvaigždžių karai" ar "TV šou".',
	'autocreatewiki-info-category-default' => 'Tai padės lankytojams rasti jūsų wiki.',
	'autocreatewiki-info-category-answers' => 'Tai padės lankytojams rasti jūsų Atsakymų svetainę.',
	'autocreatewiki-info-language' => 'Tai bus numatytosi kalbą lankytojams jūsų wiki.',
	'autocreatewiki-info-email-address' => 'Jūsų elektroninio pašto adresas niekada nebus rodomas betkam Wikia svetainėje.',
	'autocreatewiki-info-terms-agree' => 'Kuriant wiki ir vartotojo abonementą, jūs sutinkate su <a href="http://www.wikia.com/wiki/Terms_of_use">Naudojimosi Wikia sąlygomis</a>',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-empty-field' => 'Prašome užpildyti šį lauką.',
	'autocreatewiki-invalid-username' => 'Šis vartotojo vardas yra neleistinas.',
	'autocreatewiki-busy-username' => 'Šis vartotojo vardas jau užimtas.',
	'autocreatewiki-blocked-username' => 'Jūs negalite sukurti sąskaitos.',
	'autocreatewiki-empty-language' => 'Prašome pasirinkti kalbą wiki',
	'autocreatewiki-empty-category' => 'Prašome pasirinkti kategoriją.',
	'autocreatewiki-empty-wikiname' => 'Wiki pavadinimas negali būti tuščias.',
	'autocreatewiki-empty-username' => 'Vartotojo vardas negali būti tuščias.',
	'autocreatewiki-empty-password' => 'Slaptažodis negali būti tuščias.',
	'autocreatewiki-empty-retype-password' => 'Iš naujo įveskite slaptažodį negali būti tuščias.',
	'autocreatewiki-category-label' => 'Kategorija:',
	'autocreatewiki-category-other' => 'Kita',
	'autocreatewiki-set-username' => 'Pirma pasirinkite naudotojo vardą.',
	'autocreatewiki-invalid-birthday' => 'Neleistina gimimo data',
	'autocreatewiki-congratulation' => 'Sveikinimai!',
	'autocreatewiki-welcometalk-log' => 'Sveikinimo Žinutė',
	'autocreatewiki-welcomesubject' => '$1 buvo sukurta!',
	'autocreatewiki-subname-answers' => 'Atsakymai',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'autocreatewiki' => 'Создај ново вики',
	'autocreatewiki-desc' => 'Создавање на вики во ВикиФабрика по барања на корисници',
	'autocreatewiki-page-title-default' => 'Создај ново вики',
	'autocreatewiki-page-title-answers' => 'Создај нова страница за одговори',
	'createwiki' => 'Создај ново вики',
	'autocreatewiki-chooseone' => 'Изберете',
	'autocreatewiki-required' => '$1 = задолжително',
	'autocreatewiki-web-address' => 'Мреж. адреса:',
	'autocreatewiki-category-select' => 'Одберете',
	'autocreatewiki-language-top' => 'Најуспешни $1 јазици',
	'autocreatewiki-language-all' => 'Сите јазици',
	'autocreatewiki-birthdate' => 'Датум на раѓање:',
	'autocreatewiki-blurry-word' => 'Заматен збор:',
	'autocreatewiki-remember' => 'Запомни ме',
	'autocreatewiki-create-account' => 'Направи сметка',
	'autocreatewiki-done' => 'готово',
	'autocreatewiki-error' => 'грешка',
	'autocreatewiki-haveaccount-question' => 'Дали веќе имате сметка на Викија?',
	'autocreatewiki-success-title-default' => 'Вашето вики е создадено!',
	'autocreatewiki-success-title-answers' => 'Вашата страница за одговори е создадена!',
	'autocreatewiki-success-subtitle' => 'Сега можете да почнете да работите на вашето вики со посетување на:',
	'autocreatewiki-success-has-been-created' => 'е создадено!',
	'autocreatewiki-success-get-started' => 'Започнете',
	'autocreatewiki-info-domain' => 'Најдобро е да се користи збор што веројатно би бил клучен збор за пребарување на вашата тема.',
	'autocreatewiki-info-topic' => 'Додајте краток опис, од типот „Војна на ѕвездите“, или „ТВ емисии“.',
	'autocreatewiki-info-category-default' => 'Ова ќе им помогне на посетителите да го  најдат вашето вики.',
	'autocreatewiki-info-category-answers' => 'Ова ќе им помогне на посетителите да ја најдат вашата страница за одговори.',
	'autocreatewiki-info-language' => 'Ова ќе биде автоматски-зададениот јазик за посетителите на вашето вики.',
	'autocreatewiki-info-email-address' => 'Вашата е-поштенска адреса никогаш не се покажува никому на Викија.',
	'autocreatewiki-info-realname' => 'Доколку изберете да го наведете вашето име, истото ќе се користи за оддавање на заслуги за вашата работа.',
	'autocreatewiki-info-birthdate' => 'Викија бара сите корисници да го наведат нивниот датум на раѓање како безбедносна мерка, но и каконачин на зачувување на интегритетот на ова мрежно место, истовремено придржувајќи се до федералните регулативи.',
	'autocreatewiki-info-blurry-word' => 'За да ни помогнете да се заштитиме од автоматизирано создавање на сметки, внесете го заматениот збор прикажан во ова поле.',
	'autocreatewiki-info-terms-agree' => 'Со тоа што го создавате ова вики и корисничка сметка, вие се согласувате со <a href="http://www.wikia.com/wiki/Terms_of_use">Условите на употреба на Викија</a>',
	'autocreatewiki-info-staff-username' => '<b>Само за персонал:</b> Назначениот корисник ќе биде заведен како основач.',
	'autocreatewiki-title-template' => '$1 вики',
	'autocreatewiki-limit-day' => 'Викија го надмина максималниот дозволен број на создадени викија за денес ($1).',
	'autocreatewiki-limit-creation' => 'Го надминавте максималниот број на создадени викија во рок од 24 часа ($1).',
	'autocreatewiki-empty-field' => 'Пополнете го ова поле.',
	'autocreatewiki-bad-name' => 'Името не може да содржи специјални знаци (како $ или @) и мора да еден збор составен од мали букви, без празни места помеѓу нив.',
	'autocreatewiki-invalid-wikiname' => 'Името не може да содржи специјални знаци (како $ или @) и не може да стои празно',
	'autocreatewiki-violate-policy' => 'Името на ова вики содржи збор што ги прекршува нашите правила за именување',
	'autocreatewiki-name-taken' => 'Веќе постои вики со тоа име. Почнете да уредувате на <a href="http://$1.wikia.com">http://$1.wikia.com</a> или пак одберете друга адреса.',
	'autocreatewiki-name-too-short' => 'Адресата е прекратка. Одберете адреса со барем 3 знаци.',
	'autocreatewiki-name-too-long' => 'Адресата е предолга. Одберете адреса со највеќе 50 знаци.',
	'autocreatewiki-similar-wikis' => 'Подолу се наведени веќе создадените викија на оваа тема. Ви предлагаме да уредувате некое од нив.',
	'autocreatewiki-invalid-username' => 'Ова корисничко име е неважечко.',
	'autocreatewiki-busy-username' => 'Ова корисничко име е веќе зафатено.',
	'autocreatewiki-blocked-username' => 'Не можете да создадете сметка.',
	'autocreatewiki-user-notloggedin' => 'Вашата сметка е создадена, но не сте најавени со неа!',
	'autocreatewiki-empty-language' => 'Одберете јазик за викито.',
	'autocreatewiki-empty-category' => 'Одберете една категорија.',
	'autocreatewiki-empty-wikiname' => 'Името на викито не може да стои празно.',
	'autocreatewiki-empty-username' => 'Корисничкото име не може да стои празно.',
	'autocreatewiki-empty-password' => 'Лозинката не може да стои празна.',
	'autocreatewiki-empty-retype-password' => 'Превнесувањето на лозинката не може да стои празно.',
	'autocreatewiki-category-label' => 'Категорија:',
	'autocreatewiki-category-other' => 'Друго',
	'autocreatewiki-set-username' => 'Најпрвин постави корисничко име.',
	'autocreatewiki-invalid-category' => 'Неважечка вредност на категоријата. Одберете правилна категорија од паѓачкиот список.',
	'autocreatewiki-invalid-language' => 'Неважечка вредност за јазик. Одберете правилна вредност од паѓачкиот список.',
	'autocreatewiki-invalid-retype-passwd' => 'Превнесете ја истата лозинка од погоре',
	'autocreatewiki-invalid-birthday' => 'Неважечки датум на раѓање',
	'autocreatewiki-limit-birthday' => 'Не можам да ја создадам регистрацијата.',
	'autocreatewiki-log-title' => 'Вашето вики се создава',
	'autocreatewiki-step0' => 'Иницијализација на процесот...',
	'autocreatewiki-stepdefault' => 'Процесот е во тек. Почекајте...',
	'autocreatewiki-errordefault' => 'Процесот не е довршен ...',
	'autocreatewiki-step1' => 'Ја создавам папката за слики ...',
	'autocreatewiki-step2' => 'Ја создавам базата на податоци ...',
	'autocreatewiki-step3' => 'Поставувам основно-зададени информации во базата на податоци ...',
	'autocreatewiki-step4' => 'Ги копирам основно-зададените слики и лого ...',
	'autocreatewiki-step5' => 'Ги поставувам основно-зададените променливи во базата на податоци ...',
	'autocreatewiki-step6' => 'Ги поставувам основно-зададените табели во базата на податоци ...',
	'autocreatewiki-step7' => 'Го поставувам почетниот утврдувач на јазик ...',
	'autocreatewiki-step8' => 'Поставувам кориснички групи и категории ...',
	'autocreatewiki-step9' => 'Поставувам променливи за новото вики ...',
	'autocreatewiki-step10' => 'Поставувам страници на централното вики ...',
	'autocreatewiki-step11' => 'Испраќам е-пошта до корисникот ...',
	'autocreatewiki-redirect' => 'Пренасочувам кон новото вики: $1 ...',
	'autocreatewiki-congratulation' => 'Честитки!',
	'autocreatewiki-welcometalk-log' => 'Порака за добредојде',
	'autocreatewiki-regex-error-comment' => 'се користи на викито $1 (цел текст: $2)',
	'autocreatewiki-step2-error' => 'Базата на податоци постои!',
	'autocreatewiki-step3-error' => 'Не можам да поставам основно-зададени информации во базата на податоци!',
	'autocreatewiki-step6-error' => 'Не можам да поставам основно-зададени табели во базата на податоци!',
	'autocreatewiki-step7-error' => 'Не можам да ја ископирам почетната база на податоци за јазик!',
	'autocreatewiki-protect-reason' => 'Дел од официјалниот посредник',
	'autocreatewiki-welcomesubject' => 'Создавањето на $1 заврши успешно!',
	'autocreatewiki-welcomebody' => 'Здраво $2!

Вашето вики е создадено! Погледајте: <$1>

Сакате сте да почнете? Ставивме некои врски на вашата страница (<$5>) за да ви помогнеме да почнете и за ве поттикнеме да ги осознаете разните корисни места на Викија. Ако имате било какви прашања или се чувствувате изгубено, одговорете ни на ова писмо или поглејдате ги страниците за помош на <http://help.wikia.com>.

Можете да го прочитате и „Блогот за основачи и администратори“ <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> и Блогот на персоналот на Викија <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> каде ќе најдете совети и финти, информации за нови функции и новини на Викија.

Со среќа!

$3
Поддршка на заедницата на Викимедија 
<http://community.wikia.com/wiki/User:$4>',
	'autocreatewiki-welcometalk-wall-title' => 'Добредојдовте!',
	'autocreatewiki-welcometalk-wall' => 'Здраво!
Со возбуда му посакуваме добредојде на викито „{{subst:SITENAME}}“, кое сега е дел од заедницата на Викија! Сепак, има многу што да се прави, па затоа еве некои корисни совети и врски што ќе ве наведат на добар почеток:
*Не знаете каде да почнете? Навратете на [[w:c:community:Admin_Central:Main_Page|Центарот на основачи и администратори]] и погледајте го [[w:c:community:Blog:Wikia_Founders_&_Admins|Блогот]] за да добиете совети како да го започнете викито и како да почнете да го развивате! *Посетете го [[w:c:community:main page|Центарот на заедницата]] за да се запознаете со другите преку [[w:c:community:Special:Chat|разговорот во живо]], дознајте за новите функции, најновите збиднувања и престојните можности на [[w:c:community:Blog:Wikia_Staff_Blog|Блогот за персоналот]]. *Проследете ја [[w:c:community:Webinars|серијата „Вебинар“]] -- каде можете да се пријавите за да општите и соработувате со персоналот на Викија, но и да ги прегледате изминатите седници *Исто така не заборавајте да ги погледате [[Special:WikiFeatures|Викифункциите]] за да дознаете кои функции ќе можете да ги ставите на вашето вики! *Истражете ги [[w:c:community:Admin_Central:Forum|форумите]] на Центарот за основачи и администратори за да видите што прашуваат другите администратори. *На крај, посетете ги  [[w:c:community:Help:Contents|страниците за помош]] на кои ќе најдете одговори на сите поедини прашања.
Сите горенаведени врски се одлични места што ве воведуваат во Викија. Ако некаде заглавите или не можете да најдете одговор на некое прашање -- тогаш обратете ни се [[Special:Contact|тука]]. Но, најважно од сè - забавувајте се! :)
Пријатно уредување!',
	'autocreatewiki-welcometalk' => "== Добредојдовте! ==
<div style=\"font-size:120%; line-height:1.2em;\">Здраво \$1 -- баш ни е драго што го имаме викито '''\$4''' како дел од заедницата на Викија!

Сега имате една цело мрежното место за пополнување со информации, слики и видеоснимки на вашите омилени теми. Но засега има само страници што зјаат во вас празни... Застрашувачки, нели? Еве како можете да започнете.

* '''Напишете вовед за вашата тема''' на насловната страница. Ова е прилика да им објасните на читателите за какво вики се работи и која е темата. Пишувајте колку што сакате! Во писот може да се поврзат сите важни страници на викито.

* '''Започнете некои нови страници''' -- за почеток доволни се реченица-две. Не дозволувајте празнотијата да ве уплаши! Секое вики служи за додавање и менување на разни нешта како што тече времето. Можете да додавате и слики и видеоснимки за да ја пополните страницата и да ја направите поинтересна.

И само терајте! Луѓето многу сакаат да посетуваат викија кајшто има многу што да се прочита и разгледа, па затоа постојано додавајте разни нешта, и така ќе привлечете читатели и уредници. Има многу што да се работи, но не грижете се -- денес ви е прв ден, и имате многу време. Секое вики започнува исто -- малку по малку, почнувајќи со првите неколку страници, па со време нараснува во огромно, посетено и активно мрежно место.

Ако имате било какви прашања, обратете ни се по е-пошта преку вашиот [[Special:Contact|контактен образец]]. Забавувајте се!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Нови викија',
	'newwikisstart' => 'Прикажи викија со почеток во:',
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
	'autocreatewiki-reminder-body' => 'Почитуван(а) $1:

Ви го честитаме започнувањето на вашето ново вики, {{SITENAME}}! Можете да се навратите и да додавате уште нешта на викито со посета на страницата $2.

Ова е сосем нов проект, и затоа би ве замолиме да ни пишете ако имате било какви прашања!


-- Екипата на Викија-заедницата',
	'autocreatewiki-reminder-body-HTML' => '<p>Почитуван(а) $1:</p>

<p>Ви честитаме на започнувањето на вашето ново вики, {{SITENAME}}! Можете да се навратите и да додавате уште нешта на викито со посета на
<a href="$2">$2</a>.</p>

<p>Ова е сосем нов проект, и затоа би ве замолиле да ни пишете ако имате вило какви прашања!</p>

<p>-- Екипата на Викија-заедницата</p>',
	'autocreatewiki-subname-answers' => 'Одговори',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'autocreatewiki' => 'പുതിയൊരു വിക്കി സൃഷ്ടിക്കുക',
	'autocreatewiki-page-title-default' => 'പുതിയൊരു വിക്കി സൃഷ്ടിക്കുക',
	'createwiki' => 'പുതിയൊരു വിക്കി സൃഷ്ടിക്കുക',
	'autocreatewiki-chooseone' => 'ഒരെണ്ണം തിരഞ്ഞെടുക്കുക',
	'autocreatewiki-required' => '$1 = നിർബന്ധമാണ്',
	'autocreatewiki-web-address' => 'വെബ് വിലാസം:',
	'autocreatewiki-category-select' => 'ഒരെണ്ണം തിരഞ്ഞെടുക്കുക',
	'autocreatewiki-language-top' => 'ആദ്യ $1 ഭാഷകൾ',
	'autocreatewiki-language-all' => 'എല്ലാ ഭാഷകളും',
	'autocreatewiki-birthdate' => 'ജനന തീയതി:',
	'autocreatewiki-remember' => 'എന്നെ ഓർത്തുവെയ്ക്കുക',
	'autocreatewiki-create-account' => 'ഒരംഗത്വമെടുക്കുക',
	'autocreatewiki-done' => 'ചെയ്തു കഴിഞ്ഞു',
	'autocreatewiki-error' => 'പിഴവ്',
	'autocreatewiki-haveaccount-question' => 'താങ്കൾക്ക് വിക്കിയ അംഗത്വമുണ്ടോ?',
	'autocreatewiki-success-title-default' => 'താങ്കളുടെ വിക്കി സൃഷ്ടിക്കപ്പെട്ടിരിക്കുന്നു!',
	'autocreatewiki-title-template' => '$1 വിക്കി',
	'autocreatewiki-invalid-username' => 'ഈ ഉപയോക്തൃനാമം അസാധുവാണ്.',
	'autocreatewiki-busy-username' => 'ഈ ഉപയോക്തൃനാമം മുമ്പെ എടുത്തിരിക്കുന്നു.',
	'autocreatewiki-category-label' => 'വർഗ്ഗം:',
	'autocreatewiki-set-username' => 'ആദ്യം ഉപയോക്തൃനാമം സജ്ജീകരിക്കുക.',
	'autocreatewiki-invalid-birthday' => 'അസാധുവായ ജനന തീയതി',
	'autocreatewiki-congratulation' => 'അഭിനന്ദനങ്ങൾ!',
	'autocreatewiki-welcometalk-log' => 'സ്വാഗതസന്ദേശം',
	'autocreatewiki-subname-answers' => 'ഉത്തരങ്ങൾ',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'autocreatewiki' => 'Cipta wiki baru',
	'autocreatewiki-desc' => 'Cipta wiki di WikiFactory atas permintaan pengguna',
	'autocreatewiki-page-title-default' => 'Cipta wiki baru',
	'autocreatewiki-page-title-answers' => 'Cipta laman Jawapan baru',
	'createwiki' => 'Cipta wiki baru',
	'autocreatewiki-chooseone' => 'Pilih satu',
	'autocreatewiki-required' => '$1 = diperlukan',
	'autocreatewiki-web-address' => 'Alamat web:',
	'autocreatewiki-category-select' => 'Pilih satu',
	'autocreatewiki-language-top' => '$1 bahasa teratas',
	'autocreatewiki-language-all' => 'Semua bahasa',
	'autocreatewiki-birthdate' => 'Tarikh lahir:',
	'autocreatewiki-blurry-word' => 'Kata kabur:',
	'autocreatewiki-remember' => 'Ingati saya',
	'autocreatewiki-create-account' => 'Buka akaun baru',
	'autocreatewiki-done' => 'siap',
	'autocreatewiki-error' => 'ralat',
	'autocreatewiki-haveaccount-question' => 'Adakah anda mempunyai akaun Wikia?',
	'autocreatewiki-success-title-default' => 'Wiki anda telah dicipta!',
	'autocreatewiki-success-title-answers' => 'Tapak jawapan anda telah dicipta!',
	'autocreatewiki-success-subtitle' => 'Kini, anda boleh bermula mengusahakan wiki anda dengan pergi ke:',
	'autocreatewiki-success-has-been-created' => 'telah dicipta!',
	'autocreatewiki-success-get-started' => 'Mulakan',
	'autocreatewiki-info-domain' => 'Lebih baik gunakan perkataan yang dirasai kerap dijadikan kata kunci carian untuk topik anda.',
	'autocreatewiki-info-topic' => 'Isikan keterangan ringkas seperti "Star Wars" atau "Filem".',
	'autocreatewiki-info-category-default' => 'Ini akan membantu pengunjung mencari wiki anda.',
	'autocreatewiki-info-category-answers' => 'Ini akan membantu pengunjung mencari tapak Jawapan anda.',
	'autocreatewiki-info-language' => 'Inilah yang akan menjadi bahasa yang asali bagi para pengunjung wiki anda.',
	'autocreatewiki-info-email-address' => 'Alamat emel anda tidak akan ditunjukkan kepada sesiapa di Wikia.',
	'autocreatewiki-info-realname' => 'Jika anda memilih untuk menyatakannya, ini akan digunakan untuk memperakui anda atas kerja anda.',
	'autocreatewiki-info-birthdate' => 'Wikia mewajibkan semua pengguna memeberikan tarikh lahir sebenar mereka sebagai langkah berjaga-jaga serta kaedah memelihara keutuhan tapak supaya mematuhi peraturan persekutuan.',
	'autocreatewiki-info-blurry-word' => 'Untuk membantu mencegah pembukaan akaun berautomasi, sila isikan kata kabur yang nada lihat ke dalam ruangan ini.',
	'autocreatewiki-info-terms-agree' => 'Dengan mencipta wiki dan akaun pengguna, anda menyetujui <a href="http://www.wikia.com/wiki/Terms_of_use">Terma Penggunaan Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Kakitangan sahaja:</b> Pengguna yang dinyatakan ini disenaraikan sebagai pengasas.',
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => 'Wikia telah melampaui jumlah maksimum penciptaan wiki hari ini ( $1 ).',
	'autocreatewiki-limit-creation' => 'Anda telah melampaui jumlah maksimum penciptaan wiki dalam masa 24 jam ( $1 ).',
	'autocreatewiki-empty-field' => 'Sila isikan ruangan ini.',
	'autocreatewiki-bad-name' => 'Nama mestilah terdiri daripada sepatah perkataan huruf kecil sahaja, tanpa jarak dan tidak boleh mengandungi aksara khas (seperti $ atau @).',
	'autocreatewiki-invalid-wikiname' => 'Nama tidak boleh mengandungi aksara khas (seperti $ atau @) dan tidak boleh dibiarkan kosong',
	'autocreatewiki-violate-policy' => 'Nama wiki ini mengandungi kata-kata yang melanggar dasar penamaan kami',
	'autocreatewiki-name-taken' => 'Alamat ini sudah dipunyai wiki lain. Mulai menyunting di <a href="http://$1.wikia.com">http://$1.wikia.com</a> atau pilih alamat lain.',
	'autocreatewiki-name-too-short' => 'Nama ini terlalu singkat; sila pastikan nama anda ada sekurang-kurangnya 3 aksara.',
	'autocreatewiki-name-too-long' => 'Nama ini terlalu panjang; sila pastikan nama anda tidak melebihi 50 aksara.',
	'autocreatewiki-similar-wikis' => 'Berikut adalah wiki-wiki yang sudah dicipta mengenai topik ini. Apa kata anda sunting salah satu daripadanya.',
	'autocreatewiki-invalid-username' => 'Nama pengguna ini tidak sah.',
	'autocreatewiki-busy-username' => 'Nama pengguna ini sudah dipakai.',
	'autocreatewiki-blocked-username' => 'Anda tidak boleh membuka akaun.',
	'autocreatewiki-user-notloggedin' => 'Akaun anda telah dibuka tetapi belum dilog masuk!',
	'autocreatewiki-empty-language' => 'Sila pilih bahasa untuk wiki ini.',
	'autocreatewiki-empty-category' => 'Sila pilih kategori.',
	'autocreatewiki-empty-wikiname' => 'Nama wiki tidak boleh kosong.',
	'autocreatewiki-empty-username' => 'Nama pengguna tidak boleh dibiarkan kosong.',
	'autocreatewiki-empty-password' => 'Kata laluan tidak boleh dibiarkan kosong.',
	'autocreatewiki-empty-retype-password' => 'Kata laluan yang perlu ditaip semula tidak boleh dibiarkan kosong.',
	'autocreatewiki-category-label' => 'Kategori:',
	'autocreatewiki-category-other' => 'Lain-lain',
	'autocreatewiki-set-username' => 'Tentukan nama pengguna terlebih dahulu.',
	'autocreatewiki-invalid-category' => 'Nilai kategori tidak sah.
Sila pilih yang sewajarnya dari senarai juntai bawah.',
	'autocreatewiki-invalid-language' => 'Nilai bahasa tidak sah.
Sila pilih yang sewajarnya dari senarai juntai bawah.',
	'autocreatewiki-invalid-retype-passwd' => 'Sila taip semula kata laluan yang sama seperti di atas',
	'autocreatewiki-invalid-birthday' => 'Tarikh lahir tidak sah',
	'autocreatewiki-limit-birthday' => 'Pendaftaran tidak berjaya.',
	'autocreatewiki-log-title' => 'Wiki anda sedang dicipta',
	'autocreatewiki-step0' => 'Proses dimulakan ...',
	'autocreatewiki-stepdefault' => 'Proses sedang berjalan, sila tunggu ...',
	'autocreatewiki-errordefault' => 'Proses belum selesai ...',
	'autocreatewiki-step1' => 'Folder gambar sedang dicipta ...',
	'autocreatewiki-step2' => 'Pangkalan data sedang dicipta ...',
	'autocreatewiki-step3' => 'Maklumat asali sedang ditetapkan dalam pangkalan data ...',
	'autocreatewiki-step4' => 'Gambar dan logo asali sedang disalin ...',
	'autocreatewiki-step5' => 'Pembolehubah asali sedang ditetapkan dalam pangkalan data ...',
	'autocreatewiki-step6' => 'Jadual asali sedang ditetapkan dalam pangkalan data ...',
	'autocreatewiki-step7' => 'Pemula bahasa sedang dicipta ...',
	'autocreatewiki-step8' => 'Kumpulan pengguna dan kategori sedang dicipta ...',
	'autocreatewiki-step9' => 'Pembolehubah ditetapkan untuk wiki baru ...',
	'autocreatewiki-step10' => 'Laman-laman ditetapkan pada wiki pusat ...',
	'autocreatewiki-step11' => 'E-emel sedang dihantar kepada pengguna ...',
	'autocreatewiki-redirect' => 'Melencong ke wiki baru: $1 ...',
	'autocreatewiki-congratulation' => 'Tahniah!',
	'autocreatewiki-welcometalk-log' => 'Mesej Selamat Datang',
	'autocreatewiki-regex-error-comment' => 'digunakan dalam wiki $1 (seluruh teks: $2)',
	'autocreatewiki-step2-error' => 'Pangkalan data wujud!',
	'autocreatewiki-step3-error' => 'Maklumat asali tidak dapat ditetapkan dalam pangkalan data!',
	'autocreatewiki-step6-error' => 'Jadual asali tidak dapat ditetapkan dalam pangkalan data!',
	'autocreatewiki-step7-error' => 'Pangkalan data pemula untuk bahasa tidak dapat disalin!',
	'autocreatewiki-protect-reason' => 'Sebahagian antara muka rasmi',
	'autocreatewiki-welcomesubject' => '$1 telah dicipta!',
	'autocreatewiki-welcomebody' => 'Apa khabar, $2!

Wiki anda telah dicipta! Lihatlah: <$1>

Sedia untuk bermula? Kami telah menyediakan beberapa pautan ke laman perbincangan anda (<$5>) untuk membantu anda bermula serta menggalakkan anda untuk meninjau pelbagai ciri yang membantu di sekitar Wikia. Jika anda mempunyai sebarang soalan atau terasa sedikit sesat, sila balas e-mel ini atau layari laman Bantuan kami <http://help.wikia.com>.

Anda juga boleh membaca blog Pengasas & Pentadbir <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> dan blog Kakitangan Wikia <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> untuk mengetahui petua-petua yang menarik, maklumat tentang ciri-ciri baru dan perkembangan terkini di Wikia.

Selamat menyunting!

$3
Wikia Community Support
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Ingin kurangkan penerimaan pesanan dari kami? Anda boleh berhenti melanggan atau mengubah suai keutamaan e-mel anda di sini: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk-wall-title' => 'Selamat datang!',
	'autocreatewiki-welcometalk-wall' => 'Selamat sejahtera!
Dengan sukacitanya kami mengalu-alukan {{subst:SITENAME}} untuk menyertai komuniti Wikia! Masih ada banyak kerja lagi hendak dibuat, maka inilah antara petua-petua dan pautan-pautan berguna untuk merancakkan wiki anda:
*Tak tahu di mana nak mula? Singgahlah di [[w:c:community:Admin_Central:Main_Page|Founder &amp; Admin Central]] dan bacalah [[w:c:community:Blog:Wikia_Founders_&_Admins|Blog]] untuk petua-petua melancarkan dan membangunakn wiki anda!
*Kunjungi [[w:c:community:main page|Community Central]] untuk berkawan melalui [[w:c:community:Special:Chat|ruang sembang]], mengetahui ciri-ciri baru serta menerima berita terkini Wikia serta ciri-ciri yang akan datang di [[w:c:community:Blog:Wikia_Staff_Blog|Blog Kakitangan]].
*Singgahlah di [[w:c:community:Webinars|siri webinar]] kami -- di mana anda boleh mendaftar untuk berinteraksi dengan kakitangan Wikia, serta menonton sesi-sesi yang sebelumnya
*Jangan lupa menjengah [[Special:WikiFeatures|Wiki Features]] untuk mengenali ciri-ciri yang berguna untuk wiki anda!
*Jelajahi [[w:c:community:Admin_Central:Forum|forum-forum]] kami di Founder and Admin Central untuk meninjau pertanyaan pentadbir-pentadbir wiki yang lain. 
*Akhir sekali, lawati halaman-halaman [[w:c:community:Help:Contents|Bantuan]] kami untuk menjawab sebarang soalan yang ingin anda ajukan.
Kesemua pautan di atas merupakan permulaan yang terbaik untuk menjelajahi Wikia. Jika anda menemui kebuntuan atau hendak mengajukan soalan yang anda tidak tercari jawapannya -- sila hubungi kami di [[Special:Contact|sini]]. Penting sekali, berseronoklah! ^_^
Selamat menyunting!',
	'autocreatewiki-welcometalk' => "== Selamat datang! ==
<div style=\"font-size:120%; line-height:1.2em;\">Apa khabar \$1! Kami berbangga kerana '''\$4''' menyertai komuniti Wikia!

Kini, anda ada sebuah tapak web untuk diisi maklumat, gambar dan video mengenai topik kegemaran anda. Buat masa sekarang, cuma ada laman-laman kosong. Berikut ialah cara-cara untuk memulakan wiki anda.

* '''Perkenalkan topik anda''' di laman utama. Inilah peluang anda untuk menjelaskan topik wiki anda kepada para pembaca. Tulislah sebanyak mana yang anda boleh! Keterangan anda boleh dipautkan kepada laman-laman terpenting di tapak anda.

* '''Buka laman baru''' -- satu dua ayat pun cukup, asalkan jangan dibiarkan kosong dan memedihkan mata! Perkara-perkara dalam wiki boleh ditambah dan diubah sepanjang masa. Anda juga boleh membubuh gambar dan video untuk mengisi dan menceriakan laman.

Selepas ini, teruskan sahaja! Orang ramai gemar mengunjungi wiki yang padat dengan bahan bacaan dan tatapan yang menarik, jadi anda harus terus menambah bahan-bahan supaya anda boleh menarik perhatian ramai lagi pembaca dan penyunting. Banyak lagi yang harus dibuat, tetapi jangan risau! Lagipun, ini hari pertama sahaja, anda masih banyak masa lagi. Setiap wiki pun sama juga -- bak kata pepatah, sedikit demi sedikit, lama-lama jadi bukit!

Jika anda ada apa-apa masalah, anda boleh memberitahu kami dengan mengisi [[Special:Contact|borang pertanyaan]] kami. Semoga anda berseronok!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Wiki baru',
	'newwikisstart' => 'Paparkan wiki bermula dengan:',
	'autocreatewiki-reminder-body' => '$1,

Syabas kerana membuka wiki baru anda, {{SITENAME}}! Anda boleh kembali dan menambah isi kandungan wiki anda dengan melawat $2.

Ini ialah projek serba baru; jika anda ada apa-apa soalan, sila maklumkan kepada kami!


-- Pasukan Komuniti Wikia',
	'autocreatewiki-reminder-body-HTML' => '<p>$1,</p>

<p>Syabas kerana membuka wiki baru anda, {{SITENAME}}! Anda boleh kembali dan menambah isi kandungan wiki anda dengan melawat <a href="$2">$2</a>.</p>

<p>Ini ialah projek serba baru; jika anda ada apa-apa soalan, sila maklumkan kepada kami!</p>

<p>-- Pasukan Komuniti Wikia</p>',
	'autocreatewiki-subname-answers' => 'Jawapan',
);

/** Mazanderani (مازِرونی)
 * @author Firuz
 */
$messages['mzn'] = array(
	'autocreatewiki' => 'اتا نو ویکی درس هکردن',
	'autocreatewiki-page-title-default' => 'اتا نو ویکی درس هکردن',
);

/** Norwegian Bokmål (norsk (bokmål)‎)
 * @author Audun
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'autocreatewiki' => 'Opprett en ny Wiki',
	'autocreatewiki-desc' => 'Opprett wiki i WikiFactory etter forespørsel fra bruker',
	'autocreatewiki-page-title-default' => 'Opprett en ny Wiki',
	'autocreatewiki-page-title-answers' => 'Opprett en ny Svar-side',
	'createwiki' => 'Opprett en ny Wiki',
	'autocreatewiki-chooseone' => 'Velg en',
	'autocreatewiki-required' => '$1 = påkrevd',
	'autocreatewiki-web-address' => 'Nettadresse:',
	'autocreatewiki-category-select' => 'Velg en',
	'autocreatewiki-language-top' => 'Topp $1 språk',
	'autocreatewiki-language-all' => 'Alle språk',
	'autocreatewiki-birthdate' => 'Fødselsdato:',
	'autocreatewiki-blurry-word' => 'Forvrengt ord:',
	'autocreatewiki-remember' => 'Husk meg',
	'autocreatewiki-create-account' => 'Opprett en konto',
	'autocreatewiki-done' => 'ferdig',
	'autocreatewiki-error' => 'feil',
	'autocreatewiki-haveaccount-question' => 'Har du allerede en Wikia-konto?',
	'autocreatewiki-success-title-default' => 'Din wiki har blitt opprettet!',
	'autocreatewiki-success-title-answers' => 'Svar-siden din har blitt opprettet!',
	'autocreatewiki-success-subtitle' => 'Du kan nå begynne å jobbe med din wiki ved å besøke:',
	'autocreatewiki-success-has-been-created' => 'har blitt opprettet!',
	'autocreatewiki-success-get-started' => 'Sett igang',
	'autocreatewiki-info-domain' => 'Det er best å bruke ord som trolig vil bli brukt som søkeord etter emnet ditt.',
	'autocreatewiki-info-topic' => 'Legg til en kort beskrivelse som «Star Wars» eller «TV-program».',
	'autocreatewiki-info-category-default' => 'Dette vil hjelpe besøkende å finne wikien din.',
	'autocreatewiki-info-category-answers' => 'Dette vil hjelpe besøkende å finne Svar-siden din.',
	'autocreatewiki-info-language' => 'Dette blir standardspråket for besøkende på wikien din.',
	'autocreatewiki-info-email-address' => 'Din e-postadresse vil aldri bli vist til noen på Wikia.',
	'autocreatewiki-info-realname' => 'Om du velger å oppgi dette vil det bli brukt til å kreditere deg for ditt arbeid.',
	'autocreatewiki-info-birthdate' => 'Wikia krever at alle brukere oppgir deres virkelige fødselsdato, både som et sikkerhetsforetak og som et middel for å bevare integriteten til nettstedet, og samtidig etterkomme føderale bestemmelser.',
	'autocreatewiki-info-blurry-word' => 'For å beskytte mot automatisk opprettede kontoer vennligst skriv inn det forvrengte ordet som du ser i dette feltet.',
	'autocreatewiki-info-terms-agree' => 'Ved å opprette en wiki og en brukerkonto godtar du <a href="http://www.wikia.com/wiki/Terms_of_use">Wikias vilkår for bruk</a>',
	'autocreatewiki-info-staff-username' => '<b>Kun stab:</b> Den angitte brukeren vil bli listet opp som grunnlegger.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Wikia har overskredet maks antall wikier den kan opprette idag ($1).',
	'autocreatewiki-limit-creation' => 'Du har overskredet maks antall wikier du kan opprette innen 24 timer ($1).',
	'autocreatewiki-empty-field' => 'Fyll ut dette feltet.',
	'autocreatewiki-bad-name' => 'Navnet kan ikke innholde spesialtegn (som $ eller @) og må være kun ett ord skrevet med små bokstaver uten mellomrom.',
	'autocreatewiki-invalid-wikiname' => 'Navnet kan ikke inneholder spesialtegn (som $ eller @) og kan ikke være tomt',
	'autocreatewiki-violate-policy' => 'Dette wikinavnet inneholder et ord som bryter med våre retningslinjer for navngivning',
	'autocreatewiki-name-taken' => 'Det er allerede en wiki med denne adressen. Begynn å redigere på <a href="http://$1.wikia.com">http://$1.wikia.com</a> eller velg en annen adresse.',
	'autocreatewiki-name-too-short' => 'Denne adressen er for kort, velg en adresse med minst 3 tegn.',
	'autocreatewiki-name-too-long' => 'Denne adressen er for lang. Vennligst velg en adresse med maksimalt 50 tegn.',
	'autocreatewiki-similar-wikis' => 'Nedenfor er wikiene som allerede er opprettet om temaet. Vi foreslår å redigere en av dem.',
	'autocreatewiki-invalid-username' => 'Brukernavnet er ugyldig.',
	'autocreatewiki-busy-username' => 'Brukernavnet er allerede tatt.',
	'autocreatewiki-blocked-username' => 'Du kan ikke opprette en konto.',
	'autocreatewiki-user-notloggedin' => 'Kontoen er opprettet men du er ikke logget inn!',
	'autocreatewiki-empty-language' => 'Vennligst velg språk på Wikien.',
	'autocreatewiki-empty-category' => 'Vennligst velg en kategori.',
	'autocreatewiki-empty-wikiname' => 'Navnet på Wikien kan ikke være tomt.',
	'autocreatewiki-empty-username' => 'Brukernavn kan ikke være tomt.',
	'autocreatewiki-empty-password' => 'Passord kan ikke være tomt.',
	'autocreatewiki-empty-retype-password' => 'Gjenta passord kan ikke være tomt.',
	'autocreatewiki-category-label' => 'Kategori:',
	'autocreatewiki-category-other' => 'Andre',
	'autocreatewiki-set-username' => 'Angi brukernavn først.',
	'autocreatewiki-invalid-category' => 'Ugyldig kategoriverdi.
Vennligst velg en riktig fra rullegardinlisten.',
	'autocreatewiki-invalid-language' => 'Ugyldig verdi for språk.
Velg riktig fra rullegardinlisten.',
	'autocreatewiki-invalid-retype-passwd' => 'Skriv inn det samme passordet som over',
	'autocreatewiki-invalid-birthday' => 'Ugyldig fødselsdato',
	'autocreatewiki-limit-birthday' => 'Kan ikke opprette registrering.',
	'autocreatewiki-log-title' => 'Wikien din blir opprettet',
	'autocreatewiki-step0' => 'Initialiserer prosess ...',
	'autocreatewiki-stepdefault' => 'Prosessen er i gang, vent ...',
	'autocreatewiki-errordefault' => 'Prosessen ble ikke ferdig ...',
	'autocreatewiki-step1' => 'Oppretter bildemappe ...',
	'autocreatewiki-step2' => 'Oppretter database ...',
	'autocreatewiki-step3' => 'Setter opp standardinformasjon i database ...',
	'autocreatewiki-step4' => 'Kopierer standardbilder og -logo ...',
	'autocreatewiki-step5' => 'Setter opp standardvariabler i database ...',
	'autocreatewiki-step6' => 'Setter opp standardtabeller i database ...',
	'autocreatewiki-step7' => 'Setter opp oppstartsspråk ...',
	'autocreatewiki-step8' => 'Setter opp brukergrupper og -kategorier ...',
	'autocreatewiki-step9' => 'Setter opp variabler for ny wiki ...',
	'autocreatewiki-step10' => 'Setter opp sider på en sentral wiki ...',
	'autocreatewiki-step11' => 'Sender e-post til bruker ...',
	'autocreatewiki-redirect' => 'Omdirigerer til ny wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Gratulerer!',
	'autocreatewiki-welcometalk-log' => 'Velkomstmelding',
	'autocreatewiki-regex-error-comment' => 'brukt i wiki $1 (hele teksten: $2)',
	'autocreatewiki-step2-error' => 'Database finnes!',
	'autocreatewiki-step3-error' => 'Kan ikke sette standardinformasjon i database!',
	'autocreatewiki-step6-error' => 'Kan ikke sette standardtabeller i database!',
	'autocreatewiki-step7-error' => 'Kan ikke kopiere database for oppstartsspråk!',
	'autocreatewiki-protect-reason' => 'Del av det offisielle grensesnittet',
	'autocreatewiki-welcomesubject' => '$1 har blitt opprettet!',
	'autocreatewiki-welcomebody' => 'Hallo $2!

Wikien du har blitt opprettet! Ta en kikk: <$1>

Er du klar til å begynne? Vi har lagt noen lenker på diskusjonssiden din (<$5>) for å hjelpe deg med å komme i gang og oppfordre deg til å utforske de mange nyttige områdene i og rundt Wikia. Hvis du har spørsmål eller føler deg litt fortapt, svar på denne e-posten eller sjekk ut hjelpesidene <http://help.wikia.com>.

Du kan også sjekke ut Grunnlegger- & administratorbloggen <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> og bloggen til Wikia-ledelsen <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> hvor du vil finne tips og triks, info om nye funksjoner og nye ting som foregår på Wikia.

Lykke til med redigeringen!

$3
Wikia fellesskapssupport
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Vil du motta færre meldinger fra oss? Du kan avslutte abonnementet eller endre e-postinnstillingene dine her: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk-wall-title' => 'Velkommen!',
	'autocreatewiki-welcometalk-wall' => 'Hei der!
Vi er stolte over å ha {{subst:SITENAME}} som en del av Wikia-fellesskapet! Det er fortsatt en masse å gjøre, så her har du noen hjelpsomme tips og lenker for å komme i gang med wikien din:
*Ikke sikker på hvor du skal begynne? Kom innom [[w:c:community:Admin_Central:Main_Page|Grunnlegger- &amp; Admin-sentralen]] og sjekk ut [[w:c:community:Blog:Wikia_Founders_&_Admins|Bloggen]] for tips om hvordan du kan gi wikien din en pangstart og få den til å vokse!
*Besøk [[w:c:community:main page|Fellesskapssentralen]] for å skaffe deg venner via [[w:c:community:Special:Chat|chatten]], lære om nye funksjoner og holde deg oppdatert på Wikia-nyheter og kommende funksjoner på [[w:c:community:Blog:Wikia_Staff_Blog|Ledelsesbloggen]].
*Ta en titt på [[w:c:community:Webinars|webinar-serien vår]] -- hvor du kan registrere deg for å komme i kontakt med Wikia-ledelsen, og i tillegg se tidligere innslag.
*Sørg for å sjekke ut [[Special:WikiFeatures|Wiki-funksjoner]] for å se hva slags funksjoner du kan aktivere på wikien din! *Utforsk [[w:c:community:Admin_Central:Forum|forumet vårt]] på Grunnlegger- og Admin-sentralen for å se hva andre wiki-administratorer lurer på.
*Til slutt, besøk [[w:c:community:Help:Contents|hjelpesidene våre]] for å få svar på de spesifikke spørsmålene du måtte ha.
Alle lenkene ovenfor er gode steder å begynne å utforske Wikia på. Hvis du setter deg fast eller har spørsmål du ikke finner svar på -- vennligst kontakt oss [[Special:Contact|her]]. Men viktigst av alt, ha det gøy! :)
Gledelig redigering!',
	'autocreatewiki-welcometalk' => "== Velkommen! == 
<div style=\"font-size:120%; line-height:1.2em;\">Hei \$1 -- vi er glade over å ha '''\$4''' som en del av Wikia Fellesskapet! 

Nå har du en hel nettside å fylle opp med informasjon, bilder og video om yndlingstemaet ditt. Men akkurat nå er det bare tomme sider som stirrer på deg... Skremmende, eller hva? Her er noen måter å komme i gang på.

* '''Introduser temaet ditt''' på forsiden. Dette er din mulighet til å forklare leserne mer om hva temaet handler om. Skriv så mye du vil! Beskrivelsen din kan lenke til alle slags viktige artikler på siden din.

* '''Opprett noen nye sider''' -- bare en setning eller to er flott i begynnelsen. Ikke la de tomme sidene stirre deg i senk! En wiki handler om å legge til og endre ting som det faller seg. Du kan også legge til bilder og video for å fylle siden og gjøre den mer interessant. 

Så er det bare å fortsette! Folk liker å besøke wikier med en masse å lese og se på, så fortsett å legge til ting, og du vil tiltrekke nye lesere og bidragsytere. Det er en masse å gjøre, men slapp av -- i dag er den første dagen, og du har masser av tid. Hver eneste wiki starter på samme måte -- litt om gangen, fra de første få sidene, til en stor og travel side. 

Hvis du har spørsmål, kan du sende oss en e-post gjennom vårt [[Special:Contact|kontaktskjema]]. Ha det gøy!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Nye wikier',
	'newwikisstart' => 'Vis wikier fra og med:',
	'autocreatewiki-reminder-body' => '
Kjære $1: 

Gratulerer med oppstart av din nye wiki, {{SITENAME}}! Du kan komme tilbake og legge til mer på wikien ved å besøke $2. 

Dette er et helt nytt prosjekt, så vennligst skriv til oss om du har noen spørsmål! 


-- Wikia Community Teamet',
	'autocreatewiki-reminder-body-HTML' => '
<p>Kjære $1:</p> 

<p>Gratulerer med oppstart av din nye wiki, {{SITENAME}}! Du kan komme tilbake og legge til mer på wikien ved å besøke 
<a href="$2">$2</a>.</p> 

<p>Dette er et helt nytt prosjekt, så vennligst skriv til oss om du har spørsmål!</p>

<p>-- Wikia Community Teamet</p>',
	'autocreatewiki-subname-answers' => 'Svar',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author Siebrand
 */
$messages['nl'] = array(
	'autocreatewiki' => 'Begin een nieuwe wiki',
	'autocreatewiki-desc' => 'Wiki aanmaken in WikiFactory door gebruikersverzoeken',
	'autocreatewiki-page-title-default' => 'Nieuwe wiki aanmaken',
	'autocreatewiki-page-title-answers' => 'Nieuwe Antwoordensite aanmaken',
	'createwiki' => 'Nieuwe wiki aanmaken',
	'autocreatewiki-chooseone' => 'Kies er een',
	'autocreatewiki-required' => '$1 = vereist',
	'autocreatewiki-web-address' => 'Webadres:',
	'autocreatewiki-category-select' => 'Maak een keuze',
	'autocreatewiki-language-top' => 'Top $1 talen',
	'autocreatewiki-language-all' => 'Alle talen',
	'autocreatewiki-birthdate' => 'Geboortedatum:',
	'autocreatewiki-blurry-word' => 'Wazige woord:',
	'autocreatewiki-remember' => 'Aanmeldgegevens onthouden',
	'autocreatewiki-create-account' => 'Registreren',
	'autocreatewiki-done' => 'volbracht',
	'autocreatewiki-error' => 'fout',
	'autocreatewiki-haveaccount-question' => 'Hebt u al een Wikia-gebruiker?',
	'autocreatewiki-success-title-default' => 'Uw wiki is aangemaakt!',
	'autocreatewiki-success-title-answers' => 'Uw Antwoordensite is aangemaakt!',
	'autocreatewiki-success-subtitle' => 'U kunt nu gaan werken aan uw wiki door deze pagina te bezoeken:',
	'autocreatewiki-success-has-been-created' => 'is aangemaakt!',
	'autocreatewiki-success-get-started' => 'Beginnen',
	'autocreatewiki-info-domain' => 'Het is het beste om een woord te kiezen dat vaak gebruikt wordt om uw onderwerp te vinden.',
	'autocreatewiki-info-topic' => 'Voeg een korte beschrijving toe, zoals "Star Wars" of "TV-programma".',
	'autocreatewiki-info-category-default' => 'Hierdoor kunnen bezoekers uw wiki vinden.',
	'autocreatewiki-info-category-answers' => 'Hierdoor kunnen bezoekers uw Antwoordensite vinden.',
	'autocreatewiki-info-language' => 'Dit wordt de standaardtaal voor bezoekers van uw wiki.',
	'autocreatewiki-info-email-address' => 'Uw e-mailadres wordt nooit bekend gemaakt aan welk persoon dan ook op Wikia.',
	'autocreatewiki-info-realname' => 'Geef uw naam op zodat deze gebruikt kan worden om u erkenning te geven voor uw werk.',
	'autocreatewiki-info-birthdate' => 'Wikia vraagt aan alle gebruikers om hun echte geboortedatum op te geven voor veiligheid, maar ook om de integriteit van de site aan de federale regels te laten voldoen.',
	'autocreatewiki-info-blurry-word' => 'Om het automatisch aanmaken van gebruikers tegen te gaan moet u het wazige woord dat u in dit veld ziet invoeren.',
	'autocreatewiki-info-terms-agree' => 'Door een wiki en een gebruiker aan te maken accepteert u de <a href="http://www.wikia.com/wiki/Terms_of_use">gebruiksvoorwaarden van Wikia</a>.',
	'autocreatewiki-info-staff-username' => '<b>Alleen voor stafleden:</b> de aangegeven gebruiker wordt vermeld als de oprichter.',
	'autocreatewiki-title-template' => '$1 wiki',
	'autocreatewiki-limit-day' => "Wikia heeft het maximum aantal nieuwe wiki's voor vandaag ($1) overschreden.",
	'autocreatewiki-limit-creation' => "U hebt het maximum aantal nieuwe wiki's in 24 uur ($1) overschreden.",
	'autocreatewiki-empty-field' => 'Vul dit veld in.',
	'autocreatewiki-bad-name' => 'De naam kan geen speciale tekens bevatten (zoals $ of @) en moet bestaan uit één woord, zonder hoofdletters en zonder spaties.',
	'autocreatewiki-invalid-wikiname' => 'De naam kan geen speciale tekens (zoals $ of @) bevatten en kan niet leeg zijn.',
	'autocreatewiki-violate-policy' => 'Deze wikinaam bevat een woord dat ons beleid voor namen schendt.',
	'autocreatewiki-name-taken' => 'Er bestaat al een wiki met dit adres.
U kunt meehelpen op <a href="http://$1.wikia.com">http://$1.wikia.com</a> of een ander adres kiezen.',
	'autocreatewiki-name-too-short' => 'Dit adres is te kort.
Kies alstublieft een adres met tenminste drie tekens.',
	'autocreatewiki-name-too-long' => 'Het adres is te lang.
Kies een naam met hoogstens vijftig tekens.',
	'autocreatewiki-similar-wikis' => "Hieronder staan de wiki's die al aangemaakt zijn voor dit onderwerp.
We raden u aan aan een van deze wiki's te gaan werken.",
	'autocreatewiki-invalid-username' => 'Deze gebruikersnaam is ongeldig.',
	'autocreatewiki-busy-username' => 'Deze gebruikersnaam is al in gebruik.',
	'autocreatewiki-blocked-username' => 'U kunt geen gebruiker aanmaken.',
	'autocreatewiki-user-notloggedin' => 'Uw gebruiker is aangemaakt maar u bent niet aangemeld!',
	'autocreatewiki-empty-language' => 'Selecteer de taal voor de wiki.',
	'autocreatewiki-empty-category' => 'Selecteer een categorie.',
	'autocreatewiki-empty-wikiname' => 'De naam van de wiki kan niet leeg zijn.',
	'autocreatewiki-empty-username' => 'De gebruikersnaam kan niet leeg zijn.',
	'autocreatewiki-empty-password' => 'Het wachtwoord kan niet leeg zijn.',
	'autocreatewiki-empty-retype-password' => 'Het herhaalde wachtwoord kan niet leeg zijn.',
	'autocreatewiki-category-label' => 'Categorie:',
	'autocreatewiki-category-other' => 'Overige',
	'autocreatewiki-set-username' => 'Stel eerst een gebruikersnaam in.',
	'autocreatewiki-invalid-category' => 'Ongeldige categoriekeuze.
Kies een categorie uit de lijst.',
	'autocreatewiki-invalid-language' => 'Ongeldige taalkeuze.
Kies een taal uit de lijst.',
	'autocreatewiki-invalid-retype-passwd' => 'Herhaal hetzelfde wachtwoord',
	'autocreatewiki-invalid-birthday' => 'Ongeldige geboortedatum',
	'autocreatewiki-limit-birthday' => 'Kan geen registratie creëren.',
	'autocreatewiki-log-title' => 'Uw wiki wordt aangemaakt',
	'autocreatewiki-step0' => 'Proces aan het initialiseren ...',
	'autocreatewiki-stepdefault' => 'Proces is aan het werk. Een moment geduld alstublieft...',
	'autocreatewiki-errordefault' => 'Het proces was niet afgerond...',
	'autocreatewiki-step1' => 'Afbeeldingenmap aanmaken…',
	'autocreatewiki-step2' => 'Database aan het aanmaken...',
	'autocreatewiki-step3' => 'Standaardgegevens in de database aan het laden...',
	'autocreatewiki-step4' => 'Standaard afbeeldingen en logo aan het kopiëren ...',
	'autocreatewiki-step5' => 'Standaard variabelen in de database aan het laden...',
	'autocreatewiki-step6' => 'Standaard tabellen in de database aan het laden...',
	'autocreatewiki-step7' => 'Taal aan het instellen...',
	'autocreatewiki-step8' => 'Gebruikersgroepen en categorieën aan het instellen ...',
	'autocreatewiki-step9' => 'Variabelen voor de nieuwe wiki aan het instellen...',
	'autocreatewiki-step10' => "Pagina's op centrale wiki aan het instellen...",
	'autocreatewiki-step11' => 'E-mail aan het verzenden naar gebruiker...',
	'autocreatewiki-redirect' => 'Bezig met het doorverwijzen naar de nieuwe wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Gefeliciteerd!',
	'autocreatewiki-welcometalk-log' => 'Welkomstbericht',
	'autocreatewiki-regex-error-comment' => 'gebruikt in wiki $1 (volledige tekst: $2)',
	'autocreatewiki-step2-error' => 'De database bestaat al!',
	'autocreatewiki-step3-error' => 'Het was niet mogelijk de standaard gegevens in de database te laden!',
	'autocreatewiki-step6-error' => 'Het was niet mogelijk de standaard tabellen in de database te laden!',
	'autocreatewiki-step7-error' => 'Het was niet mogelijk de database voor de taal te kopiëren!',
	'autocreatewiki-protect-reason' => 'Onderdeel van de officiële interface',
	'autocreatewiki-welcomesubject' => '$1 is aangemaakt!',
	'autocreatewiki-welcomebody' => "Hallo $2!

Uw wiki is aangemaakt! Ga maar kijken op <$1>

Bent u klaar om te beginnen? We hebben een aantal verwijzingen op uw overlegpagina toegevoegd (<$5>) om u op weg te helpen en om u aan te moedigen om de vele handige bronnen rondom Wikia te verkennen. Als u vragen hebt of een beetje de weg kwijt bent, antwoord dan op deze e-mail of kijk op onze hulpppagina's: <http://help.wikia.com>.

U kunt ook op onze blog voor Oprichters en beheerders kijken <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> of op de blog van Wikiamedewerkers <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog>. Daar vindt u tips en trucs, informatie over nieuwe functies en ander nieuws over Wikia.
 
Succes met uw project!

$3
Wikia Gemeenschapsondersteuning
<http://community.wikia.com/wiki/User:$4>",
	'autocreatewiki-welcometalk' => "== Welkom! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hallo \$1. We zijn erg blij dat '''\$4''' onderdeel is geworden van de Wikiagemeenschap!

U hebt nu een hele website tot uw beschikking hebt die u met informatie, afbeeldingen en video over uw favoriete onderwerp kunt gaan vullen. Maar nu staart een lege pagina u aan. Spannend, toch? Hier volgen wat tips om u op weg te helpen.

* '''Leid uw onderwerp in''' op de hoofdpagina. Dit is uw gelegenheid om uw lezers aan te geven wat uw onderwerp van belang maakt. Schrijf zoveel u wilt. In uw beschrijving kunt u naar alle belangrijke pagina's op uw site verwijzen.

* '''Maak nieuwe pagina's aan'''. Soms zijn een paar zinnen al voldoende als beginnetje. Laat het geen lege pagina's zijn! Een belangrijke werkwijze in een wiki is toevoegen en later verbeteren en verfijnen. U kunt ook afbeeldingen en video toevoegen om de pagina te vullen en deze interessanter en spannender te maken.

En daarna vooral volhouden! De wiki's waar veel te lezen en te zien is zijn het meest aantrekkelijk, dus blijf vooral informatie toevoegen zodat u meer lezers krijgt en daardoor nieuwe gebruikers die ook bijdragen. Er is veel te doen, maar maak u geen zorgen. Vandaag is uw eerste dag en er is voldoende tijd. Iedere wiki start op dezelfde manier. Beetje voor beetje, de eerste pagina's eerst, om zich in de tijd mogelijk tot een grote, drukke website te ontwikkelen.

Als u vragen hebt, e-mail ons dan via het [[Special:Contact|contactformulier]]. Veel plezier!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => "Nieuwe wiki's",
	'newwikisstart' => "Wiki's weergeven vanaf:",
	'autocreatewiki-reminder-body' => 'Beste $1.

Van harte gefeliciteerd met het starten van uw nieuwe wiki {{SITENAME}}! Kom vooral vaak terug om meer inhoud aan uw wiki toe te voegen op $2.

Dit is een volledig nieuw project, dus laat het ons weten als u met vragen zit.

-- Wikia gemeenschapsteam',
	'autocreatewiki-reminder-body-HTML' => '<p>Beste $1.</p>

<p>Van harte gefeliciteerd met het starten van uw nieuwe wiki {{SITENAME}}! Kom vooral vaak terug om meer inhoud aan uw wiki toe te voegen op <a href="$2">$2</a>.</p>

<p>Dit is een volledig nieuw project, dus laat het ons weten als u met vragen zit.</p>

<p>-- Wikia gemeenschapsteam</p>',
	'autocreatewiki-subname-answers' => 'Antwoorden',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'autocreatewiki-haveaccount-question' => 'Heb je al een Wikia-gebruiker?',
	'autocreatewiki-success-title-default' => 'Je wiki is aangemaakt!',
	'autocreatewiki-success-title-answers' => 'Je Antwoordensite is aangemaakt!',
	'autocreatewiki-success-subtitle' => 'Je kunt nu gaan werken aan je wiki door deze pagina te bezoeken:',
	'autocreatewiki-info-domain' => 'Het is het beste om een woord te kiezen dat vaak gebruikt wordt om je onderwerp te vinden.',
	'autocreatewiki-info-category-default' => 'Hierdoor kunnen bezoekers je wiki vinden.',
	'autocreatewiki-info-category-answers' => 'Hierdoor kunnen bezoekers je Antwoordensite vinden.',
	'autocreatewiki-info-language' => 'Dit wordt de standaardtaal voor bezoekers van je wiki.',
	'autocreatewiki-info-email-address' => 'Je e-mailadres wordt nooit bekend gemaakt aan welk persoon dan ook op Wikia.',
	'autocreatewiki-info-realname' => 'Geef je naam op zodat deze gebruikt kan worden om je erkenning te geven voor je werk.',
	'autocreatewiki-info-blurry-word' => 'Om het automatisch aanmaken van gebruikers tegen te gaan moet je het wazige woord dat je in dit veld ziet invoeren.',
	'autocreatewiki-info-terms-agree' => 'Door een wiki en een gebruiker aan te maken accepteer je de <a href="http://www.wikia.com/wiki/Terms_of_use">gebruikersvoorwaarden van Wikia</a>.',
	'autocreatewiki-limit-creation' => "Je hebt het maximum aantal nieuwe wiki's in 24 uur ($1) overschreden.",
	'autocreatewiki-blocked-username' => 'Je kunt geen gebruiker aanmaken.',
	'autocreatewiki-user-notloggedin' => 'Je gebruiker is gemaakt maar je bent niet aangemeld!',
	'autocreatewiki-log-title' => 'Je wiki wordt aangemaakt',
	'autocreatewiki-welcomebody' => 'Hoi $2!

De Wikia die je hebt aangevraagd is nu beschikbaar op de volgende URL: <$1>. We hopen dat je daar snel gaat bewerken!

We hebben informatie en tips op je overlegpagina toegevoegd (<$5>) om je op weg te helpen.

Als je problemen ondervindt kunt je de gemeenschap om hulp vragen op de wiki (<http://www.wikia.com/wiki/Forum:Help_desk>), of via een e-mail naar community@wikia.com. Je kunt ook ons live IRC-chatkanaal bezoeken via <http://irc.wikia.com>.

Je kunt ook direct contact met mij opnemen per e-mail of op mijn overlegpagina bij vragen of zorgen.

Succes met je project!

$3

Wikia Gemeenschapsteam

<http://www.wikia.com/wiki/User:$4>', # Fuzzy
	'autocreatewiki-welcometalk' => "== Welkom! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hallo \$1 -- we zijn erg blij dat '''\$4''' onderdeel is geworden van de Wikia-gemeenschap!

Je hebt nu een hele website tot je beschikking hebt die je met informatie, afbeeldingen en video over je favoriete onderwerp kunt gaan vullen. Maar nu staart een lege pagina je aan. Spannend, toch? Hier volgen wat tips om je op weg te helpen.

* '''Leid je onderwerp in''' op de hoofdpagina. Dit is je gelegenheid om uw lezers aan te geven wat je onderwerp van belang maakt. Schrijf zoveel je wilt. In je beschrijving kan je naar alle belangrijke pagina's op je site verwijzen.

* '''Maak nieuwe pagina's aan''' -- soms zijn een paar zinnen al voldoende als beginnetje. Laat het geen lege pagina's zijn! Een belangrijke werkwijze in een wiki is toevoegen en later verbeteren en verfijnen. Je kunt ook afbeeldingen en video toevoegen om de pagina te vullen en deze interessanter en spannender te maken.

En daarna vooral volhouden! De wiki's waar veel te lezen en te zien is zijn het meest aantrekkelijk, dus blijf vooral informatie toevoegen zodat je meer lezers krijgt en daardoor nieuwe gebruikers die ook bijdragen. Er is veel te doen, maar maak u geen zorgen. Vandaag is uw eerste dag en er is voldoende tijd. Iedere wiki start op dezelfde manier. Beetje voor beetje, de eerste pagina's eerst, om zich in de tijd mogelijk tot een grote, drukke website te ontwikkelen.

Als je vragen hebt, e-mail ons dan via het [[Special:Contact|contactformulier]]. Veel plezier!

-- [[User:\$2|\$3]] <staff /></div>",
	'autocreatewiki-reminder-body' => 'Hoi $1.

Van harte gefeliciteerd met het starten van je nieuwe wiki {{SITENAME}}! Kom vooral vaak terug om meer inhoud aan uw wiki toe te voegen op $2.

Dit is een volledig nieuw project, dus laat het ons weten als je met vragen zit.

-- Wikia gemeenschapsteam',
	'autocreatewiki-reminder-body-HTML' => '<p>Hoi $1.</p>

<p>Van harte gefeliciteerd met het starten van je nieuwe wiki {{SITENAME}}! Kom vooral vaak terug om meer inhoud aan je wiki toe te voegen op <a href="$2">$2</a>.</p>

<p>Dit is een volledig nieuw project, dus laat het ons weten als je met vragen zit.</p>

<p>-- Wikia gemeenschapsteam</p>',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'autocreatewiki' => 'Ä naijes Wiki grinde',
	'autocreatewiki-page-title-default' => 'Ä naijes Wiki grinde',
	'autocreatewiki-page-title-answers' => 'Ä naiji Oandwoad-Said mache',
	'createwiki' => 'Ä naijes Wiki grinde',
	'autocreatewiki-birthdate' => 'Gbuadsdaach:',
	'autocreatewiki-done' => 'Ferdisch',
	'autocreatewiki-error' => 'Fehla',
	'autocreatewiki-success-get-started' => 'Alla, fong oa!',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-invalid-username' => 'De Benudzanoame isch ugildisch.',
	'autocreatewiki-busy-username' => "De Benudzanoame hods b'raids.",
	'autocreatewiki-blocked-username' => 'Du deafschd kä Kondo oalesche.',
	'autocreatewiki-user-notloggedin' => 'Doi Kondo isch erzaischd worre, awa bischd ned oagmeld!',
	'autocreatewiki-empty-language' => 'Wehlda ä Schbrooch fa doi Wiki.',
	'autocreatewiki-invalid-birthday' => 'Ugilidische Gbuadsdaach',
	'autocreatewiki-congratulation' => 'Gliggwinsch',
	'autocreatewiki-welcomebody' => "Hei $2!

Doi Wiki isch eazaischd worre! Gugg do: <$1>

Ferdisch fas loschlesche? S'sin ä paa Ling'gs uff doi Dischbediersaid (<$5>) kumme, domid laischda de Oischdiesch in die B'raisch vun Wikia finne duschd. Wonn Frooche hoschd, doan oandwoad uff die Mail oda guggda die Hilfsaid <http://help.wikia.com> oa.

Du konschd a die Said <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> un <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> oagugge, wus a Hilf un Naijischkaide gewe dud.

Alla hob!

$3
Wikia Community Support
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Wilschd wenischa Nochrischde krische? Konschd disch ausschraiwe oda doi doi E-Mail Oischdellunge änare: http://community.wikia.com/Special:Preferences",
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Sovq
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'autocreatewiki' => 'Utwórz nową wiki',
	'autocreatewiki-desc' => 'Tworzenie przez użytkownika nowej wiki w WikiFactory',
	'autocreatewiki-page-title-default' => 'Utwórz nową wiki',
	'autocreatewiki-page-title-answers' => 'Utwórz nową wiki Zapytaj',
	'createwiki' => 'Utwórz nową wiki',
	'autocreatewiki-chooseone' => 'Wybierz',
	'autocreatewiki-required' => '$1 = wymagane',
	'autocreatewiki-web-address' => 'Adres strony internetowej:',
	'autocreatewiki-category-select' => 'Wybierz',
	'autocreatewiki-language-top' => '$1 najpopularniejszych języków',
	'autocreatewiki-language-all' => 'Wszystkie języki',
	'autocreatewiki-birthdate' => 'Data urodzenia:',
	'autocreatewiki-blurry-word' => 'Zamazane słowo:',
	'autocreatewiki-remember' => 'Zapamiętaj mnie',
	'autocreatewiki-create-account' => 'Zarejestruj się',
	'autocreatewiki-done' => 'gotowe',
	'autocreatewiki-error' => 'błąd',
	'autocreatewiki-haveaccount-question' => 'Masz już konto na Wikii?',
	'autocreatewiki-success-title-default' => 'Twoja wiki została utworzona!',
	'autocreatewiki-success-title-answers' => 'Twoja wiki Zapytaj została utworzona!',
	'autocreatewiki-success-subtitle' => 'Możesz teraz rozpocząć pracę nad swoją wiki, odwiedzając:',
	'autocreatewiki-success-has-been-created' => 'została utworzona!',
	'autocreatewiki-success-get-started' => 'Pierwsze kroki',
	'autocreatewiki-info-domain' => 'Najlepiej użyć słowa najbliższego tematyce wiki.',
	'autocreatewiki-info-topic' => 'Dodaj krótki opis, taki jak „Gwiezdne Wojny” lub „Seriale TV”.',
	'autocreatewiki-info-category-default' => 'Pomoże to odnaleźć odwiedzającym Twoją wiki.',
	'autocreatewiki-info-category-answers' => 'Pomoże to odnaleźć odwiedzającym Twoją Zapytaj wiki.',
	'autocreatewiki-info-language' => 'Będzie to domyślny język dla odwiedzających Twoją wiki.',
	'autocreatewiki-info-email-address' => 'Twój adres e-mail będzie niewidoczny dla innych użytkowników.',
	'autocreatewiki-info-realname' => 'Jeśli zdecydujesz się je podać, zostaną użyte, by udokumentować Twoje autorstwo.',
	'autocreatewiki-info-birthdate' => 'Wikia wymaga od wszystkich użytkowników podania przez nich rzeczywistej daty urodzenia zarówno ze względów bezpieczeństwa jak i ze względu na konieczność zapewnienia zgodności z przepisami federalnymi.',
	'autocreatewiki-info-blurry-word' => 'Ze względu na ochronę przed automatycznym tworzeniem kont, przepisz zamazane słowo, które widać w tym polu.',
	'autocreatewiki-info-terms-agree' => 'Tworząc wiki i konto użytkownika, zgadzasz się na <a href="http://www.wikia.com/wiki/Terms_of_use">Zasady Użytkowania Wikii</a>',
	'autocreatewiki-info-staff-username' => '<b>Wyłącznie personel –</b> określony użytkownik zostanie wyświetlony jako założyciel.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Utworzono dziś w Wikii maksymalną liczbę wiki ($1).',
	'autocreatewiki-limit-creation' => 'Utworzyłeś w przeciągu ostatnich 24 godzin na Wikii maksymalną liczbę wiki ($1).',
	'autocreatewiki-empty-field' => 'Należy wypełnić to pole.',
	'autocreatewiki-bad-name' => 'Nazwa nie może zawierać znaków specjalnych (np. $ czy @) i musi być jednym słowem zapisanym małymi literami bez odstępów.',
	'autocreatewiki-invalid-wikiname' => 'Nazwa nie może zawierać znaków specjalnych (np. $ czy @) i nie może być pusta',
	'autocreatewiki-violate-policy' => 'Nazwa wiki zawiera słowo, które narusza nasza zasady tworzenia wiki',
	'autocreatewiki-name-taken' => 'Wiki pod tym adresem już istnieje. Zapraszamy do rozpoczęcia edytowania na <a href="http://$1.wikia.com">http://$1.wikia.com</a> lub wybrania innego adresu.',
	'autocreatewiki-name-too-short' => 'Ten adres jest zbyt krótki. Należy wybrać adres o co najmniej 3 znakach.',
	'autocreatewiki-name-too-long' => 'Ten adres jest zbyt długi. Należy wybrać adres o maksymalnie 50 znakach.',
	'autocreatewiki-similar-wikis' => 'Poniżej znajdują się wiki dotyczące tego tematu. Proponujemy edycję jednej z nich.',
	'autocreatewiki-invalid-username' => 'Ta nazwa użytkownika jest nieprawidłowa.',
	'autocreatewiki-busy-username' => 'Ta nazwa użytkownika jest już wykorzystywana.',
	'autocreatewiki-blocked-username' => 'Nie można utworzyć konta.',
	'autocreatewiki-user-notloggedin' => 'Twoje konto zostało utworzone, ale nie jesteś zalogowany!',
	'autocreatewiki-empty-language' => 'Określ język dla tej wiki.',
	'autocreatewiki-empty-category' => 'Wybierz kategorię.',
	'autocreatewiki-empty-wikiname' => 'Nazwa wiki nie może być pusta.',
	'autocreatewiki-empty-username' => 'Nazwa użytkownika nie może być pusta.',
	'autocreatewiki-empty-password' => 'Hasło nie może być puste.',
	'autocreatewiki-empty-retype-password' => 'Powtórzone hasło nie może być puste.',
	'autocreatewiki-category-label' => 'Kategoria:',
	'autocreatewiki-category-other' => 'Inne',
	'autocreatewiki-set-username' => 'Najpierw określ nazwę użytkownika.',
	'autocreatewiki-invalid-category' => 'Nieprawidłowa kategoria. 
Wybierz prawidłową z listy rozwijanej.',
	'autocreatewiki-invalid-language' => 'Nieprawidłowy język. 
Wybierz prawidłowy z listy rozwijanej.',
	'autocreatewiki-invalid-retype-passwd' => 'Przepisz hasło tak aby było identyczne z powyższym',
	'autocreatewiki-invalid-birthday' => 'Nieprawidłowa data urodzenia',
	'autocreatewiki-limit-birthday' => 'Nie można dokończyć rejestracji.',
	'autocreatewiki-log-title' => 'Twoja wiki jest w trakcie tworzenia',
	'autocreatewiki-step0' => 'Trwa inicjowanie procesu...',
	'autocreatewiki-stepdefault' => 'Proces trwa, proszę czekać...',
	'autocreatewiki-errordefault' => 'Proces nie został ukończony...',
	'autocreatewiki-step1' => 'Tworzenie folderu obrazów...',
	'autocreatewiki-step2' => 'Tworzenie bazy danych...',
	'autocreatewiki-step3' => 'Ustawianie domyślnych informacji w bazie danych...',
	'autocreatewiki-step4' => 'Kopiowanie domyślnych obrazów oraz logo...',
	'autocreatewiki-step5' => 'Ustawianie w bazie danych domyślnych zmiennych...',
	'autocreatewiki-step6' => 'Ustawienie w bazie danych domyślnych tabel...',
	'autocreatewiki-step7' => 'Ustawienie początkowych wartości dla języka...',
	'autocreatewiki-step8' => 'Ustawianie grup użytkowników i kategorii...',
	'autocreatewiki-step9' => 'Ustawianie zmiennych dla nowej wiki...',
	'autocreatewiki-step10' => 'Ustawienie stron na centralnej wiki...',
	'autocreatewiki-step11' => 'Wysyłanie e‐maila do użytkownika...',
	'autocreatewiki-redirect' => 'Przekierowanie do nowej wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Gratulacje!',
	'autocreatewiki-welcometalk-log' => 'Powitanie',
	'autocreatewiki-regex-error-comment' => 'wykorzystane na wiki $1 (pełny tekst: $2)',
	'autocreatewiki-step2-error' => 'Baza danych istnieje!',
	'autocreatewiki-step3-error' => 'Nie można ustawić domyślnych informacji w bazie danych!',
	'autocreatewiki-step6-error' => 'Nie można ustawić domyślnych tabel w bazie danych!',
	'autocreatewiki-step7-error' => 'Nie można skopiować do bazy danych początkowych wartości dla języka!',
	'autocreatewiki-protect-reason' => 'Część oficjalnego interfejsu',
	'autocreatewiki-welcomesubject' => '$1 została utworzona!',
	'autocreatewiki-welcomebody' => 'Witaj $2,

Wiki, którą utworzyłeś, jest aktualnie dostępna na stronie <$1>.

Umieściliśmy na Twojej stronie dyskusji (<$5>) trochę informacji i porad, aby pomóc Ci na początku. Jeśli napotkasz jakieś problemy, możesz znaleźć pomoc na stronie <http://pomoc.wikia.com>.

Możesz także odwiedzić forum w Centrum Społeczności - <http://spolecznosc.wikia.com/wiki/Forum:Strona_główna> aby znaleźć odpowiedzi na nurtujące Cię pytania.

Życzymy powodzenia przy tworzeniu nowego projektu!

$3

Zespół Wikia
<http://www.wikia.com/wiki/User:$4>

___________________________________________
* Chcesz otrzymywać mniej wiadomości? Możesz wyłączyć lub zmienić ustawienia powiadomień tutaj: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk-wall-title' => 'Witaj!',
	'autocreatewiki-welcometalk-wall' => "Gratulujemy rozpoczęcia edycji {{subst:SITENAME}}. Jest to zupełnie nowy projekt, więc potrzebuje sporego zaangażowania. Oto kilka wskazówek na dobry początek.


* '''Ta wiki jest Twoja – korzystaj i ciesz się!''' Gdy wiki stanie się popularna, wiele osób będzie czytać to, o czym piszesz. Na razie jeszcze nikt nie zagląda Ci przez ramię, dlatego też zachęcamy do samodzielnego uczenia się edycji poprzez popełnianie błędów.


* '''Twórz strony z niewielką zawartością tekstu!''' Najtrudniej jest rozpocząć pisanie, gdy patrzy się na pustą stronę i nie bardzo wie od czego zacząć. Wszystko wydaje się znacznie łatwiejsze po napisaniu pierwszych kilku zdań. Tak więc weź głęboki oddech i pisz, strona po stronie. Potem można będzie dopisywać na niej więcej tekstu, edytując w miarę upływu czasu. 


* '''Łącz strony przy pomocy linków!''' Linki ułatwią Tobie i innym czytelnikom odnaleźć się na tej wiki, przełączać się z jednej strony na drugą. Aby utworzyć link do strony o podobnej tematyce, użyj przycisku \"Dodaj link\". Warto również na pierwszej stronie opisującej tematykę danej wiki umieścić link do wszystkich najważniejszych stron. 


* '''Dodaj obrazy!''' Dobrze dobrany obraz urozmaici Twoją wiki. Podczas edycji strony, użyj przycisku \"Dodaj obraz\", aby przesłać obraz z komputera na stronę. 


* '''Kiedy ukończysz edycję wiki – pokaż ją znajomym!''' Jeśli utworzyłeś kilka stron, połącz je linkami i dodaj obrazy. Prawdopodobnie znasz ludzi, którzy mają podobne zainteresowania do Twoich, więc poleć im zajrzenie na Twoją wiki. Oni będą jej pierwszymi czytelnikami i prawdopodobnie również pomogą Ci w edycji tekstów, służ im zatem radami, jeśli będą potrzebowali pomocy.


Jeśli masz problem, [[Special:Contact|skontaktuj się z nami]] lub zajrzyj na [http://spolecznosc.wikia.com/wiki/Centrum_Społeczności Centrum Społeczności] -- chętnie pomożemy!

Powodzenia!<div style=\"display:none\">[[w:c:community:Admin_Central:Main_Page|Founder & Admin Central]], [[w:c:community:Blog:Wikia_Founders_&_Admins|Blog]], [[w:c:community:main page|Community Central]], [[w:c:community:Special:Chat|chat]], [[w:c:community:Blog:Wikia_Staff_Blog|Staff Blog]], [[w:c:community:Webinars|webinar series]], [[Special:WikiFeatures|Wiki Features]], [[w:c:community:Admin_Central:Forum|forums]], [[w:c:community:Help:Contents|Help Pages]]</div>",
	'autocreatewiki-welcometalk' => "== Witaj! ==
<div style=\"font-size:120%; line-height:1.4em;\">Witaj \$1 -- Gratulujemy rozpoczęcia edycji '''\$4'''! Jest to zupełnie nowy projekt, więc potrzebuje sporego zaangażowania. Oto kilka wskazówek na dobry początek.


* '''Ta wiki jest Twoja – korzystaj i ciesz się!''' Gdy wiki stanie się popularna, wiele osób będzie czytać to, o czym piszesz. Na razie jeszcze nikt nie zagląda Ci przez ramię, dlatego też zachęcamy do samodzielnego uczenia się edycji poprzez popełnianie błędów.


* '''Twórz strony z niewielką zawartością tekstu!''' Najtrudniej jest rozpocząć pisanie, gdy patrzy się na pustą stronę i nie bardzo wie od czego zacząć. Wszystko wydaje się znacznie łatwiejsze po napisaniu pierwszych kilku zdań. Tak więc weź głęboki oddech i pisz, strona po stronie. Potem można będzie dopisywać na niej więcej tekstu, edytując w miarę upływu czasu. 


* '''Łącz strony przy pomocy linków!''' Linki ułatwią Tobie i innym czytelnikom odnaleźć się na tej wiki, przełączać się z jednej strony na drugą. Aby utworzyć link do strony o podobnej tematyce, użyj przycisku \"Dodaj link\". Warto również na pierwszej stronie opisującej tematykę danej wiki umieścić link do wszystkich najważniejszych stron. 


* '''Dodaj obrazy!''' Dobrze dobrany obraz urozmaici Twoją wiki. Podczas edycji strony, użyj przycisku \"Dodaj obraz\", aby przesłać obraz z komputera na stronę. 


* '''Kiedy ukończysz edycję wiki – pokaż ją znajomym!''' Jeśli utworzyłeś kilka stron, połącz je linkami i dodaj obrazy. Prawdopodobnie znasz ludzi, którzy mają podobne zainteresowania do Twoich, więc poleć im zajrzenie na Twoją wiki. Oni będą jej pierwszymi czytelnikami i prawdopodobnie również pomogą Ci w edycji tekstów, służ im zatem radami, jeśli będą potrzebowali pomocy.


Jeśli masz problem, [[Special:Contact|skontaktuj się z nami]] lub zajrzyj na [http://spolecznosc.wikia.com/wiki/Centrum_Społeczności Centrum Społeczności] -- chętnie pomożemy!

Powodzenia!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Nowe wiki',
	'newwikisstart' => 'Wyświetl wiki rozpoczynając od:',
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
	'autocreatewiki-reminder-body' => 'Drogi $1!

Gratulujemy utworzenia „{{SITENAME}}”! Możesz teraz wejść na swoją wiki odwiedzając $2 i dodać informacje.

Jest to zupełnie nowy projekt, więc napisz do nas, jeżeli masz jakiekolwiek pytania!

-- Zespół Wikii',
	'autocreatewiki-reminder-body-HTML' => '<p>Drogi $1,</p>

<p>Gratulujemy Ci utworzenia „{{SITENAME}}”! Możesz teraz wejść na swoją wiki odwiedzając <a href="$2">$2</a> i dodać nowe informacje..</p>

<p>Jest to zupełnie nowy projekt, więc napisz do nas jeśli masz jakieś pytania!</p>

<p>–– Zespół Wikii</p>',
	'autocreatewiki-subname-answers' => 'Zapytaj',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'autocreatewiki' => 'Crea na neuva Wiki',
	'autocreatewiki-desc' => 'Crea wiki an WikiFactory për arcesta utent',
	'autocreatewiki-page-title-default' => 'Crea na neuva Wiki',
	'autocreatewiki-page-title-answers' => "Crea un sit neuv d'Arspòste",
	'createwiki' => 'Crea na neuva Wiki',
	'autocreatewiki-chooseone' => 'Sern-ne un-a',
	'autocreatewiki-required' => '$1 = ciamà',
	'autocreatewiki-web-address' => "Adrëssa dl'Aragnà:",
	'autocreatewiki-category-select' => 'Sern-ne un-a',
	'autocreatewiki-language-top' => 'Prime $1 lenghe',
	'autocreatewiki-language-all' => 'Tute lenghe',
	'autocreatewiki-birthdate' => 'Data ëd nàssita:',
	'autocreatewiki-blurry-word' => 'Paròla confondùa:',
	'autocreatewiki-remember' => 'Arcòrdme',
	'autocreatewiki-create-account' => 'Crea un Cont',
	'autocreatewiki-done' => 'fàit',
	'autocreatewiki-error' => 'eror',
	'autocreatewiki-haveaccount-question' => 'Ha-lo già un cont Wikia?',
	'autocreatewiki-success-title-default' => "Toa wiki a l'é stàita creà!",
	'autocreatewiki-success-title-answers' => "Tò sit d'arspòste a l'é stàit creà!",
	'autocreatewiki-success-subtitle' => 'It peule adess ancaminé a travajé dzora a toa wiki an visitand:',
	'autocreatewiki-success-has-been-created' => "a l'é stàita creà!",
	'autocreatewiki-success-get-started' => 'Ancamin-a',
	'autocreatewiki-info-domain' => "A l'é mej dovré na paròla ch'a peussa esse na ciav d'arserca për tò argoment.",
	'autocreatewiki-info-topic' => 'Gionté na descrission curta com "Guère Stelar" o "Spetàcol dla television".',
	'autocreatewiki-info-category-default' => 'Sòn a giuterà ij visitador a trové soa wiki.',
	'autocreatewiki-info-category-answers' => "Sòn a giutërà ij visitador a trové sò sit d'arspòste.",
	'autocreatewiki-info-language' => 'Costa a sarà la lenga dë stàndard për ij visitador ëd soa wiki.',
	'autocreatewiki-info-email-address' => "Soa adrëssa ëd pòsta eletrònica a l'é mai mostrà a gnun su Wikia.",
	'autocreatewiki-info-realname' => "S'a sern ëd delo, a sarà dovrà për atribuije sò travaj.",
	'autocreatewiki-info-birthdate' => "Wikia a ciama a tùit j'utent ëd dé soa vera data ëd nàssita sia për precaussion ëd sigurëssa sia com mojen ëd preeservé l'antegrità dël sit ant ël rispet dij regolament federaj.",
	'autocreatewiki-info-blurry-word' => "Për giuté a protege contra la creassion ëd cont automàtica, për piasì ch'a anserissa la paròla tërmolanta ch'a vëd an sto camp-sì.",
	'autocreatewiki-info-terms-agree' => "An creand na wiki e un cont utent, a l'é d'acòrdi con le <a href=\"http://www.wikia.com/wiki/Terms_of_use\">Condission d'usagi ëd Wikia</a>",
	'autocreatewiki-info-staff-username' => "<b>Mach Echip:</b> L'utent specificà a sarà listà com fondator.",
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => "Wikia a l'ha passà ël màssim nùmer ëd creassion ëd wiki ancheuj ($1).",
	'autocreatewiki-limit-creation' => "It l'has passà ël màssim nùmer ëd creassion ëd wiki an 24 ore ($1).",
	'autocreatewiki-empty-field' => 'Për piasì completa sto camp-sì.',
	'autocreatewiki-bad-name' => 'Ël nòm a peul pa conten-e caràter speciaj (com $ o @) e a deuv esse na sola paròla minùscola sensa spassi.',
	'autocreatewiki-invalid-wikiname' => 'Ël nòm a peul pa conten-e caràter speciaj (com $ e @) e a peul pa esse veuid',
	'autocreatewiki-violate-policy' => "Sto nòm ëd wiki-sì a conten na paròla ch'a rispeta pa nòstre régole pr'ij nòm",
	'autocreatewiki-name-taken' => 'A-i é già na wiki con costa adrëssa. Ch\'a ancamin-a a modifiché a <a href="http://$1.wikia.com">http://$1.wikia.com</a> o ch\'a serna n\'àutra adrëssa.',
	'autocreatewiki-name-too-short' => "St'adrëssa a l'é tròp curta, sern n'adrëssa con almanch 3 caràter.",
	'autocreatewiki-name-too-long' => "St'adrëssa a l'é tròp longa. Për piasì, ch'a serna n'adrëssa con al pi 50 caràter.",
	'autocreatewiki-similar-wikis' => "Sì-sota a-i son le wiki già creà su sto argoment-sì. Nòst sugeriment a l'é ëd travajé su un-a ëd cole.",
	'autocreatewiki-invalid-username' => "Sto nòm utent a l'é pa bon.",
	'autocreatewiki-busy-username' => "Sto nòm utent a l'é già pijà.",
	'autocreatewiki-blocked-username' => 'It peule pa creé ëd cont.',
	'autocreatewiki-user-notloggedin' => "Sò cont a l'é stàit creà ma a l'é pa intrà ant ël sistema!",
	'autocreatewiki-empty-language' => 'Për piasì, selessioné la lenga dla Wiki.',
	'autocreatewiki-empty-category' => 'Për piasì, selession-a na categorìa.',
	'autocreatewiki-empty-wikiname' => 'Ël nòm ëd la Wiki a peul pa esse veuid.',
	'autocreatewiki-empty-username' => 'Ël nòm utent a peul pa esse veuid.',
	'autocreatewiki-empty-password' => 'La ciav a peul pa esse veuida.',
	'autocreatewiki-empty-retype-password' => 'La ciav torna scrivùa a peul pa esse veuida.',
	'autocreatewiki-category-label' => 'Categorìa:',
	'autocreatewiki-category-other' => 'Àutr',
	'autocreatewiki-set-username' => 'Ampòsta nòm utent prima.',
	'autocreatewiki-invalid-category' => "Valor ëd categorìa pa bon. Për piasì, ch'a selession-a col giust da la lista a ridò.",
	'autocreatewiki-invalid-language' => "Valor ëd lenga pa bon. Për piasì, ch'a selession-a col bon da la lista a ridò.",
	'autocreatewiki-invalid-retype-passwd' => "Për piasì, ch'a scriva torna la midema ciav ëd cola dëdzora",
	'autocreatewiki-invalid-birthday' => 'Data ëd nàssita pa bon-a',
	'autocreatewiki-limit-birthday' => "Impossìbil creé l'argistrassion.",
	'autocreatewiki-log-title' => "Toa wiki a l'é an creassion",
	'autocreatewiki-step0' => 'Process an camin ...',
	'autocreatewiki-stepdefault' => "Ël process a gira, për piasì ch'a speta ...",
	'autocreatewiki-errordefault' => "Ël process a l'é pa finì ...",
	'autocreatewiki-step1' => 'Creé cartela dle figure ...',
	'autocreatewiki-step2' => 'Creassion dla base ëd dàit ...',
	'autocreatewiki-step3' => "Amposté dj'anformassion dë stàndard ant la base ëd dàit ...",
	'autocreatewiki-step4' => 'Copia dle figure stàndard e dla marca ...',
	'autocreatewiki-step5' => 'Ampostassion dle variàbij dë stàndard ant la base ëd dàit ...',
	'autocreatewiki-step6' => 'Ampostassion dle tàule dë stàndard ant la base ëd dàit ...',
	'autocreatewiki-step7' => 'Amposté lenga inissial ...',
	'autocreatewiki-step8' => "Ampostassion dle partìe dj'utent e dle categorìe ...",
	'autocreatewiki-step9' => 'Ampostassion dle variàbij për la neuva Wiki ...',
	'autocreatewiki-step10' => 'Ampostassion dle pàgine an sla Wiki sentral ...',
	'autocreatewiki-step11' => "Spedission dël mëssagi a l'utent ...",
	'autocreatewiki-redirect' => 'Ridiression a la neuva Wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Congratulassion!',
	'autocreatewiki-welcometalk-log' => 'Mëssagi ëd Bin ëvnù',
	'autocreatewiki-regex-error-comment' => 'dovrà ant la Wiki $1 (test antregh: $2)',
	'autocreatewiki-step2-error' => 'La base ëd dàit a esist!',
	'autocreatewiki-step3-error' => "Impossìbil amposté j'anformassion dë stàndard ant la base ëd dàit!",
	'autocreatewiki-step6-error' => 'Impossìbil amposté le tàule dë stàndard ant la base ëd dàit!',
	'autocreatewiki-step7-error' => 'Impossìbil copié la base ëd dàit inissial për la lenga!',
	'autocreatewiki-protect-reason' => "Part ëd l'antërfacia ufissial",
	'autocreatewiki-welcomesubject' => "$1 a l'é stàit creà!",
	'autocreatewiki-welcomebody' => "Cerea $2!

Soa wiki a l'é stàita creà! Ch'a-j daga n'ociada: <$1>

Pront a parte? Noi i l'oma giontà chèiche liure a soa pagina ëd ciaciarade (<$5>) për giutelo a ancaminé e për ancoragelo a esploré le vàire àree ùtij ëd Wikia. S'a l'ha qualsëssìa chestion o s'as sent un pòch pers, ch'a rësponda a 's mëssagi o ch'a lesa nòstre pàgine d'agiut <http://help.wikia.com>.

A peul ëdcò vardé lë scartari dël Fondator e Aministrator <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> e lë scartari dl'Echip Wikia <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> anté a peul trové ëd sugeriment e truch, anformassion dzora neuve funsion e neuve ròbe ch'a càpito an Wikia.

Tant boneur con ël proget!

$3
Echip ëd la Comunità Wikia
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Veul-lo arseive meno 'd mëssagi da noi? A peul ësganfé l'anscrission o cangé sò gust ëd pòsta eletrònica ambelessì:
http://community.wikia.com/Special:Preferences",
	'autocreatewiki-welcometalk' => "== Bin ëvnù! ==
<div style=\"font-size:120%; line-height:1.2em;\">Cerea \$1 -- noi i soma content d'avèj '''\$4''' com part ëd la comunità Wikia!

Adess a l'ha 'n sit antregh da ampinì con anformassion, figure e filà dzora ai sò argoment favorì. Ma për ël moment, a-i é mach ëd pàgine bianche dëdnans a chiel ... Brut, pa vera? Ambelessì a-i son chèich manere d'ancaminé.

* '''Ch'a antroduva ij sò argoment''' ant la prima pàgina. Costa a l'é soa oportunità dë spieghé ai sò letor lòn che sò argoment a l'é. Ch'a scriva vàire ch'a veul! Soa descrission a peul avèj d'anliure a tute le pàgine amportante dzora a sò sit.

* '''Ch'a ancamin-a dle pàgine neuve''' -- mach na fras o doe a l'é giust për ancaminé. Ch'as fasa pa sbaruvé da le pàgine bianche! Na wiki a l'é mach gionté e cangé dle còse man a man. A peul ëdcò gionté ëd figure e filmà, për ampinì le pàgine e feje pi anteressante.

E peui ch'a la cudissa! A le përson-e a-i pias visité le wiki quand ch'a-i é motobin ëd ròba da lese e vardé, parèj ch'a continua a gionté 'd ròba, e as tirërà letor e contribudor. A-i é motobin da fé, ma ch'as sagrin-a pa -- ancheuj a l'é sò prim di, e a-i é motobin ëd temp. Minca wiki a part a la midema manera -- un tòch për vòta, ancaminand con le prime pòche pàgine, fin a chërse ant un sit gròss, pien.

S'a l'ha ëd chestion, a peul mandeje për pòsta eletrònica a nòstr [[Special:Contact|formolari ëd contat]]. Tant boneur!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'neuve wiki',
	'newwikisstart' => 'Visualisa Wiki partend da:',
	'autocreatewiki-reminder-body' => "Car $1:

Congratulassion për la partensa ëd soa neuva wiki, {{SITENAME}}! A peul torné andré e gionté ròbe a soa wiki an visitand $2.

Cost-sì a l'é un proget neuv, antlora për piasì ch'a na scriva s'a l'ha qualsëssìa chestion!

-- L'Echip dla Comunità Wikia",
	'autocreatewiki-reminder-body-HTML' => '<p>Car $1:</p>

<p>Congratulassion për la partensa ëd soa neuva wiki, {{SITENAME}}! A peul torné andré e gionté ròbe a soa wiki an visitand 
<a href="$2">$2</a>.</p>

<p>Cost-sì a l\'é un proget neuv, antlora për piasì ch\'a na scriva s\'a l\'ha qualsëssìa chestion!</p>

<p>-- L\'Echip dla Comunità Wikia</p>',
	'autocreatewiki-subname-answers' => 'Rispòste',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'autocreatewiki' => 'يو نوی ويکي جوړول',
	'autocreatewiki-page-title-default' => 'یو نوی ويکي جوړول',
	'autocreatewiki-page-title-answers' => 'د ځوابونو يو نوی وېبځی جوړول',
	'createwiki' => 'يو نوی ويکي جوړول',
	'autocreatewiki-chooseone' => 'يو وټاکۍ',
	'autocreatewiki-web-address' => 'د جال پته:',
	'autocreatewiki-category-select' => 'يو وټاکۍ',
	'autocreatewiki-language-top' => 'د سر $1 ژبې',
	'autocreatewiki-language-all' => 'ټولې ژبې',
	'autocreatewiki-birthdate' => 'د زېږون نېټه:',
	'autocreatewiki-blurry-word' => 'تته ويکه:',
	'autocreatewiki-remember' => 'ما په ياد لره',
	'autocreatewiki-create-account' => 'يو ګڼون جوړول',
	'autocreatewiki-done' => 'ترسره شو',
	'autocreatewiki-error' => 'تېروتنه',
	'autocreatewiki-haveaccount-question' => 'آيا تاسې له پخوا نه په ويکييا کې يو کارن-حساب لرۍ؟',
	'autocreatewiki-success-title-default' => 'ستاسې ويکي جوړ شو!',
	'autocreatewiki-success-has-been-created' => 'جوړ شو!',
	'autocreatewiki-success-get-started' => 'پېلول',
	'autocreatewiki-title-template' => '$1 ويکي',
	'autocreatewiki-invalid-username' => 'دا کارن نوم سم نه دی.',
	'autocreatewiki-busy-username' => 'دا کارن نوم بل چا ځانته ټاکلی.',
	'autocreatewiki-blocked-username' => 'تاسې کارن حساب نه شی جوړولای.',
	'autocreatewiki-empty-category' => 'لطفاً د وېشنيزو نه يوه وټاکۍ.',
	'autocreatewiki-category-label' => 'وېشنيزه:',
	'autocreatewiki-category-other' => 'بل',
	'autocreatewiki-set-username' => 'لومړی مو کارن نوم وټاکۍ.',
	'autocreatewiki-invalid-birthday' => 'ناسمه زېږون نېټه',
	'autocreatewiki-log-title' => 'ستاسې ويکي د جوړېدو په حال کې دی',
	'autocreatewiki-step2' => 'توکبنسټ د جوړولو په حال کې...',
	'autocreatewiki-congratulation' => 'مبارک مو شه!',
	'autocreatewiki-welcometalk-log' => 'د ښه راغلاست پيغام',
	'autocreatewiki-welcomesubject' => '$1 جوړ شو!',
	'newwikis' => 'نوې ويکي ګانې',
	'autocreatewiki-subname-answers' => 'ځوابونه',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author SandroHc
 * @author Waldir
 */
$messages['pt'] = array(
	'autocreatewiki' => 'Criar uma wiki nova',
	'autocreatewiki-desc' => 'Criar uma wiki na FábricaDeWikis a pedido dos utilizadores',
	'autocreatewiki-page-title-default' => 'Criar uma wiki nova',
	'autocreatewiki-page-title-answers' => 'Criar um site novo de Respostas',
	'createwiki' => 'Criar uma wiki nova',
	'autocreatewiki-chooseone' => 'Escolha uma',
	'autocreatewiki-required' => '$1 = obrigatório',
	'autocreatewiki-web-address' => 'URL da wiki:',
	'autocreatewiki-category-select' => 'Seleccione uma',
	'autocreatewiki-language-top' => 'As $1 línguas de topo',
	'autocreatewiki-language-all' => 'Todas as línguas',
	'autocreatewiki-birthdate' => 'Data de nascimento:',
	'autocreatewiki-blurry-word' => 'Palavra distorcida:',
	'autocreatewiki-remember' => 'Recordar-me entre sessões',
	'autocreatewiki-create-account' => 'Criar uma conta',
	'autocreatewiki-done' => 'finalizado',
	'autocreatewiki-error' => 'erro',
	'autocreatewiki-haveaccount-question' => 'Já tem uma conta Wikia?',
	'autocreatewiki-success-title-default' => 'A sua wiki foi criada!',
	'autocreatewiki-success-title-answers' => 'O seu site de Respostas foi criado!',
	'autocreatewiki-success-subtitle' => 'Pode começar a trabalhar na sua wiki no endereço:',
	'autocreatewiki-success-has-been-created' => 'foi criada!',
	'autocreatewiki-success-get-started' => 'Começar',
	'autocreatewiki-info-domain' => 'É melhor usar como tópico uma palavra que seja um alvo provável de pesquisas.',
	'autocreatewiki-info-topic' => 'Adicione uma descrição breve, como "Guerra das Estrelas" ou "Programas de televisão".',
	'autocreatewiki-info-category-default' => 'Isto ajuda visitantes a encontrar a sua wiki.',
	'autocreatewiki-info-category-answers' => 'Isto ajuda visitantes a encontrar o seu site de Respostas.',
	'autocreatewiki-info-language' => 'Esta será a língua por omissão para os visitantes da sua wiki.',
	'autocreatewiki-info-email-address' => 'O seu endereço de correio electrónico nunca é mostrado a terceiros na Wikia.',
	'autocreatewiki-info-realname' => 'Se optar por fornecê-lo, ele será usado para dar-lhe o crédito do seu trabalho.',
	'autocreatewiki-info-birthdate' => 'A Wikia requer que todos os utilizadores forneçam a sua data de nascimento verdadeira, tanto por medida de segurança como por ser uma forma de preservar a integridade do site e respeitar regulamentações federais dos Estados Unidos.',
	'autocreatewiki-info-blurry-word' => 'Para ajudar a prevenir a criação de contas automatizada, escreva a palavra distorcida que vê neste campo.',
	'autocreatewiki-info-terms-agree' => 'Ao criar uma wiki e um utilizador, concorda com as <a href="http://www.wikia.com/wiki/Terms_of_use">Condições de Uso da Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Só para a equipa:</b> O utilizador especificado será listado como o fundador.',
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => 'A Wikia excedeu o número máximo de criações de wikis hoje ($1).',
	'autocreatewiki-limit-creation' => 'Excedeu o número máximo de criações de wikis em 24 horas ($1).',
	'autocreatewiki-empty-field' => 'Preencha este campo, por favor.',
	'autocreatewiki-bad-name' => 'O nome não pode conter caracteres especiais (como $ ou @) e tem de ser uma só palavra, em minúsculas e sem espaços.',
	'autocreatewiki-invalid-wikiname' => 'O nome não pode conter caracteres especiais (como $ ou @) e não pode ficar vazio',
	'autocreatewiki-violate-policy' => 'O nome da wiki contém uma palavra que viola as nossas normas de nomenclatura',
	'autocreatewiki-name-taken' => 'Já existe uma wiki com este endereço. Comece a editar em <a href="http://$1.wikia.com">http://$1.wikia.com</a> ou escolha outro endereço.',
	'autocreatewiki-name-too-short' => 'Este endereço é demasiado curto. Escolha um endereço com no mínimo 3 caracteres.',
	'autocreatewiki-name-too-long' => 'Este endereço é demasiado longo. Escolha um endereço com no máximo 50 caracteres, por favor.',
	'autocreatewiki-similar-wikis' => 'Encontra abaixo as wikis já criadas sobre este tópico. Sugerimos que edite uma delas.',
	'autocreatewiki-invalid-username' => 'Este nome de utilizador é inválido.',
	'autocreatewiki-busy-username' => 'Este nome de utilizador já existe.',
	'autocreatewiki-blocked-username' => 'Não pode criar a conta.',
	'autocreatewiki-user-notloggedin' => 'A sua conta foi criada mas não foi iniciada uma sessão!',
	'autocreatewiki-empty-language' => 'Seleccione a língua da wiki, por favor.',
	'autocreatewiki-empty-category' => 'Seleccione uma das categorias, por favor.',
	'autocreatewiki-empty-wikiname' => 'O nome da wiki não pode ficar vazio.',
	'autocreatewiki-empty-username' => 'O nome do utilizador não pode ficar vazio.',
	'autocreatewiki-empty-password' => 'A palavra-chave não pode ficar vazia.',
	'autocreatewiki-empty-retype-password' => 'A repetição da palavra-chave não pode ficar vazia.',
	'autocreatewiki-category-label' => 'Categoria:',
	'autocreatewiki-category-other' => 'Outro',
	'autocreatewiki-set-username' => 'Primeiro defina o nome de utilizador.',
	'autocreatewiki-invalid-category' => 'Categoria inválida.
Seleccione uma apropriada da lista.',
	'autocreatewiki-invalid-language' => 'Língua inválida.
Seleccione uma apropriada da lista descendente.',
	'autocreatewiki-invalid-retype-passwd' => 'Repita a mesma palavra-chave, por favor',
	'autocreatewiki-invalid-birthday' => 'Data de nascimento inválida',
	'autocreatewiki-limit-birthday' => 'Não foi possível criar o registo.',
	'autocreatewiki-log-title' => 'A sua wiki está a ser criada',
	'autocreatewiki-step0' => 'A iniciar o processo ...',
	'autocreatewiki-stepdefault' => 'O processo está em execução; aguarde, por favor ...',
	'autocreatewiki-errordefault' => 'O processo não tinha terminado ...',
	'autocreatewiki-step1' => 'A criar o directório de imagens ...',
	'autocreatewiki-step2' => 'A criar a base de dados ...',
	'autocreatewiki-step3' => 'A definir os dados por omissão na base de dados ...',
	'autocreatewiki-step4' => 'A copiar as imagens e logótipo por omissão ...',
	'autocreatewiki-step5' => 'A definir as variáveis por omissão na base de dados ...',
	'autocreatewiki-step6' => 'A definir as tabelas por omissão na base de dados ...',
	'autocreatewiki-step7' => 'A definir base de dados inicial da língua ...',
	'autocreatewiki-step8' => 'A definir grupos de utilizadores e categorias ...',
	'autocreatewiki-step9' => 'A definir variáveis da nova wiki ...',
	'autocreatewiki-step10' => 'A definir páginas na wiki central ...',
	'autocreatewiki-step11' => 'A enviar correio electrónico para o utilizador ...',
	'autocreatewiki-redirect' => 'A reencaminhar para a nova wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Parabéns!',
	'autocreatewiki-welcometalk-log' => 'Mensagem de Boas-vindas',
	'autocreatewiki-regex-error-comment' => 'usada na wiki $1 (texto completo: $2)',
	'autocreatewiki-step2-error' => 'A base de dados existe!',
	'autocreatewiki-step3-error' => 'Não foi possível definir os dados por omissão na base de dados!',
	'autocreatewiki-step6-error' => 'Não foi possível definir as tabelas por omissão na base de dados!',
	'autocreatewiki-step7-error' => 'Não foi possível copiar a base de dados inicial para a língua!',
	'autocreatewiki-protect-reason' => 'Parte da interface oficial',
	'autocreatewiki-welcomesubject' => '$1 foi criada!',
	'autocreatewiki-welcomebody' => 'Olá $2!

A wiki que solicitou está agora disponível! Dê uma olhada agora em: <$1>

Preparado para começar? Nós adicionámos alguns links na sua Página de Discussão (<$5>) para ajudá-lo a começar e para o encorajar a explorar as muitas áreas à volta da Wikia. Se você tiver alguma pergunta ou se sentir um pouco perdido, responda a este e-mail ou verifique as nossas páginas de ajuda <http://help.wikia.com>.

Você também pode verificar o blogue do Fundador & Admin <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> e o blogue da Gerência da Wikia <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> onde poderás encontrar dicas, truques, e informações sobre novas funcionalidades e novidades da Wikia.

Boas edições!

$3
A Equipa da Comunidade Wikia
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Você quer receber menos mensagens nossas? Você pode remover a subscrição ou alterar as suas preferências de e-mail aqui: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk' => "== Bem-vindo(a)! ==
<div style=\"font-size:120%; line-height:1.2em;\">Olá \$1 -- é óptimo poder contar com a '''\$4''' na comunidade Wikia!

Agora tem um site completo na internet para preencher com informação, imagens e vídeos sobre o seu assunto preferido. Mas, para já, ele só contém páginas vazias... É assustador, não é? Aqui vão algumas sugestões para começar:

* '''Apresente o tema''' na página inicial. Esta é a sua oportunidade de explicar aos visitantes tudo sobre o tema da wiki. Escreva tudo o que quiser! A sua descrição pode conter links para todas as páginas importantes do site.

* '''Crie algumas páginas novas''' -- só uma frase ou duas já serão um bom começo. Não se deixe bloquear pela página vazia! Uma wiki vive da adição e alteração de coisas ao longo do tempo. Também pode adicionar imagens e vídeos, para preencher a página e torná-la mais interessante.

Depois é só continuar! As pessoas gostam de visitar wikis com muito conteúdo para ler e ver, por isso continue a adicionar coisas e vai atrair leitores e editores. Há muito a fazer, mas não se preocupe -- hoje é só o seu primeiro dia e ainda tem muito tempo. Todas as wikis começam da mesma forma -- um pouco de cada vez, começando pelas primeiras páginas, até se tornarem num site enorme e muito visitado.

Se tiver alguma questão, pode contactar-nos por correio electrónico usando o [[Special:Contact|formulário de contacto]]. Divirta-se!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Wikis novas',
	'newwikisstart' => 'Mostrar wikis, começando por:',
	'autocreatewiki-reminder-body' => '
Caro(a) $1:

Parabéns por ter iniciado a nova wiki, {{SITENAME}}! Pode regressar e adicionar mais conteúdos à sua wiki, visitando $2.

Este é um projecto acabado de estrear, por isso contacte-nos se tiver qualquer questão!


-- A Equipa da Comunidade Wikia',
	'autocreatewiki-reminder-body-HTML' => '
<p>Caro(a) $1:</p>

<p>Parabéns por ter iniciado a nova wiki, {{SITENAME}}! Pode regressar e adicionar mais conteúdos à sua wiki, visitando
<a href="$2">$2</a>.</p>

<p>Este é um projecto acabado de estrear, por isso contacte-nos se tiver qualquer questão!</p>

<p>-- A Equipa da Comunidade Wikia</p>',
	'autocreatewiki-subname-answers' => 'Respostas',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Aristóbulo
 * @author Giro720
 * @author Jesielt
 * @author Luckas Blade
 */
$messages['pt-br'] = array(
	'autocreatewiki' => 'Crie uma nova Wiki',
	'autocreatewiki-desc' => 'Crie uma wiki no WikiFactory a partir de pedidos de usuários',
	'autocreatewiki-page-title-default' => 'Crie uma nova Wiki',
	'autocreatewiki-page-title-answers' => 'Criar um site novo de Respostas',
	'createwiki' => 'Crie uma nova Wiki',
	'autocreatewiki-chooseone' => 'Escolha uma',
	'autocreatewiki-required' => '$1 = campos obrigatórios',
	'autocreatewiki-web-address' => 'Endereço:',
	'autocreatewiki-category-select' => 'Escolha uma',
	'autocreatewiki-language-top' => 'Os $1 idiomas mais usados',
	'autocreatewiki-language-all' => 'Todos os idiomas',
	'autocreatewiki-birthdate' => 'Data de nascimento:',
	'autocreatewiki-blurry-word' => 'Palavra borrada:',
	'autocreatewiki-remember' => 'Me lembre',
	'autocreatewiki-create-account' => 'Crie uma conta',
	'autocreatewiki-done' => 'feito',
	'autocreatewiki-error' => 'erro',
	'autocreatewiki-haveaccount-question' => 'Você já tem uma conta Wikia?',
	'autocreatewiki-success-title-default' => 'Sua wiki foi criada!',
	'autocreatewiki-success-title-answers' => 'O seu site de Respostas foi criado!',
	'autocreatewiki-success-subtitle' => 'Você pode agora começar a trabalhar na sua wiki visitando:',
	'autocreatewiki-success-has-been-created' => 'foi criado!',
	'autocreatewiki-success-get-started' => 'Comece',
	'autocreatewiki-info-domain' => 'É melhor usar uma palavra com a qual as pessoas irão encontrar seu tópico através de buscas.',
	'autocreatewiki-info-topic' => 'Coloque uma descrição curta como "Star Wars" ou "Programas de TV".',
	'autocreatewiki-info-category-default' => 'Isto ajudará os visitantes a encontrar a sua wiki.',
	'autocreatewiki-info-category-answers' => 'Isto ajudará os visitantes a encontrar o seu site de Respostas.',
	'autocreatewiki-info-language' => 'Esse irá ser o idioma padrão para os visitantes da sua wiki.',
	'autocreatewiki-info-email-address' => 'Seu e-mail nunca é mostrado para ninguém no Wikia.',
	'autocreatewiki-info-realname' => 'Se você optar por preenchê-lo, este será utilizado para dar-lhe crédito pelo seu trabalho.',
	'autocreatewiki-info-birthdate' => 'O Wikia exige que todos os usuários providam suas verdadeiras datas de nascimento como uma medida de segurança e para preservar a integridade do site, mantendo a conformidade com os regulamentos federais.',
	'autocreatewiki-info-blurry-word' => 'Para ajudar a proteger o site contra a criação automática de contas, por favor digite a palavra borrada que você vê dentro deste campo.',
	'autocreatewiki-info-terms-agree' => 'Ao criar uma wiki e uma conta de usuário, você está concordando com os <a href="http://www.wikia.com/wiki/Terms_of_use">Termos de Uso do Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Só o staff:</b> O usuário especificado será listado com o fundador.',
	'autocreatewiki-title-template' => 'Wiki $1',
	'autocreatewiki-limit-day' => 'O Wikia excedeu o número máximo de criação de wiki hoje ($1).',
	'autocreatewiki-limit-creation' => 'Você excedeu o máximo número de criação de wikis em 24 horas ($1).',
	'autocreatewiki-empty-field' => 'Por favor, preencha esse campo.',
	'autocreatewiki-bad-name' => 'O nome não pode conter caracteres especiais (como $ ou @) nem espaços e precisa estar todo em minúsculo.',
	'autocreatewiki-invalid-wikiname' => 'O nome não pode conter caracteres especiais (como $ ou @) e não pode estar vazio.',
	'autocreatewiki-violate-policy' => 'Esse nome de wiki contém uma palavra que viola as nossas políticas de nomeação.',
	'autocreatewiki-name-taken' => 'Já existe uma wiki com esse nome. Você é bem-vindo a partipar dela em <ahref="http://$1.wikia.com">http://$1.wikia.com</a> ou escolher outro endereço.',
	'autocreatewiki-name-too-short' => 'Esse nome é muito curto, por favor escolha um nome com no mímino 3 caracteres.',
	'autocreatewiki-name-too-long' => 'Esse nome é muito longo, por favor escolha um nome com no máximo 50 caracteres.',
	'autocreatewiki-similar-wikis' => 'Abaixo estão as wikis já criadas nesse tópico. Nós sugerimos que você edite uma delas.',
	'autocreatewiki-invalid-username' => 'Esse nome de usuário é inválido.',
	'autocreatewiki-busy-username' => 'Esse nome de usuário já é usado.',
	'autocreatewiki-blocked-username' => 'Você não pode criar uma conta.',
	'autocreatewiki-user-notloggedin' => 'Sua conta foi criada, mas você não está logado.',
	'autocreatewiki-empty-language' => 'Por favor, selecione o idioma da Wiki.',
	'autocreatewiki-empty-category' => 'Por favor, selecione uma categoria.',
	'autocreatewiki-empty-wikiname' => 'O nome da Wiki não pode estar vazio.',
	'autocreatewiki-empty-username' => 'O nome de usuário não pode estar vazio.',
	'autocreatewiki-empty-password' => 'A senha não pode estar vazia.',
	'autocreatewiki-empty-retype-password' => '"Redigite sua senha" não pode estar vazio.',
	'autocreatewiki-category-label' => 'Categoria:',
	'autocreatewiki-category-other' => 'Outro',
	'autocreatewiki-set-username' => 'Primeiro defina o nome de usuário.',
	'autocreatewiki-invalid-category' => 'Categoria inválida.
Selecione uma apropriada da lista.',
	'autocreatewiki-invalid-language' => 'Língua inválida.
Selecione uma apropriada da lista.',
	'autocreatewiki-invalid-retype-passwd' => 'Repita a mesma senha, por favor',
	'autocreatewiki-invalid-birthday' => 'Data de nascimento inválida',
	'autocreatewiki-limit-birthday' => 'Não foi possível criar o registro.',
	'autocreatewiki-log-title' => 'A sua wiki está sendo criada',
	'autocreatewiki-step0' => 'Iniciando processo ...',
	'autocreatewiki-stepdefault' => 'O processo está sendo feito, por favor aguarde...',
	'autocreatewiki-errordefault' => 'O processo não foi finalizado...',
	'autocreatewiki-step1' => 'Criando o diretório de imagens ...',
	'autocreatewiki-step2' => 'Criando a base de dados ...',
	'autocreatewiki-step3' => 'Definindo os dados por padrão na base de dados ...',
	'autocreatewiki-step4' => 'Copiando as imagens e logotipo padrões ...',
	'autocreatewiki-step5' => 'Definindo as variáveis padrões na base de dados ...',
	'autocreatewiki-step6' => 'Definindo as tabelas padrões na base de dados ...',
	'autocreatewiki-step7' => 'Definindo base de dados inicial da língua ...',
	'autocreatewiki-step8' => 'Definindo grupos de usuários e categorias ...',
	'autocreatewiki-step9' => 'Definindo variáveis da nova wiki ...',
	'autocreatewiki-step10' => 'Definindo páginas na wiki central ...',
	'autocreatewiki-step11' => 'A enviar correio eletrônico para o usuário ...',
	'autocreatewiki-redirect' => 'Redirecionando para a nova wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Parabéns!',
	'autocreatewiki-welcometalk-log' => 'Mensagem de Boas-vindas',
	'autocreatewiki-regex-error-comment' => 'usada na wiki $1 (texto completo: $2)',
	'autocreatewiki-step2-error' => 'A base de dados existe!',
	'autocreatewiki-step3-error' => 'Não foi possível definir os dados padrões na base de dados!',
	'autocreatewiki-step6-error' => 'Não foi possível definir as tabelas padrões na base de dados!',
	'autocreatewiki-step7-error' => 'Não foi possível copiar a base de dados inicial para a língua!',
	'autocreatewiki-protect-reason' => 'Parte da interface oficial',
	'autocreatewiki-welcomesubject' => '$1 foi criado!',
	'autocreatewiki-welcomebody' => 'Olá, $2,

O Wikia que você requisitou está agora disponível em <$1>. Nós esperamos vê-lo editando lá em breve!

Nós adicionamos algumas informações e dicas na sua página de discussão de usuário <$5> pra ajudar-lhe a começar.

Se você tiver algum problema, você pode pedir a ajuda da comunidade na wiki em <http://www.wikia.com/wiki/Forum:Help_desk> ou via email para community@wikia.com . Você também pode visitar nosso canal de chat IRC #wikia IRC <http://irc.wikia.com>.

Eu posso ser contatado diretamente por email ou na minha página de discussão, caso você tenha alguma pergunta ou preocupação.

Boa sorte com o projeto!

$3

Equipe da comunidade do Wikia (Wikia Community Team)

<http://www.wikia.com/wiki/User:$4>', # Fuzzy
	'autocreatewiki-welcometalk' => "== Boas-vindas! ==
<div style=\"font-size:120%; line-height:1.2em;\">Olá \$1 -- nós estamos felizes por ter '''\$4''' como parte da comunidade do Wikia!

Agora você tem um website inteiro para encher de informações, figuras e vídeos sobre os seus tópicos favoritos. Mas, agora mesmo, há apenas páginas vazias olhando para você... Assustador, certo? Aqui estão algumas formas de começar.

* '''Introduza seu tópico''' na página principal. Essa é sua oportunidade de explicar aos seus leitores sobre o que seu tópico trata. Escreva o quanto quiser! Sua descrição pode conter links para todas as páginas importantes do seu site.

* '''Inicie algumas páginas novas''' -- apenas uma frase ou duas já esta bom para começar. Não deixe as páginas em branco desanimarem você! Um wiki é exatamente acrescentar, adicionar e mudar enquanto você está criando. Você também pode carregar imagens e vídeos para dar conteúdo à página e deixá-la mais interessante.

Então, apenas continue editando! As pessoas gostam de visitar wikis quando há muitas informações e coisa para serem lidas e vistas, então continue adicionando coisas e aumentando sua wiki e você irá atrair leitores e editores. Há muita coisa a ser feita, mas não se preocupe, hoje é apenas o seu primeiro dia e você ainda tem tempo de sobra. Toda wiki começa do mesmo jeito, com um pouco de cada vez, começando com poucas páginas até crescer e se transformar num enorme e ocupado site.

Se você tiver alguma dúvida, você pode nos contatar através do nosso [[Special:Contact|formulário de contato]]. Divirta-se!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Novas wikis',
	'newwikisstart' => 'Mostrar Wikis começando com:',
	'autocreatewiki-reminder-body' => '
Caro(a) $1:

Parabéns por começar a seu nova wiki, {{SITENAME}}! Você pode voltar e adicionar mais informações a sua wiki visitando $2.

Esse é um projeto novo, então, por favor, nos escreva caso você tenha alguma dúvida!


-- Equipe da comunidade do Wikia (Wikia Community Team)',
	'autocreatewiki-reminder-body-HTML' => '<p>Caro(a) $1:</p>

<p>Parabéns por começar a seu nova wiki, {{SITENAME}}! Você pode voltar e adicionar mais informações a sua wiki visitando
<a href="$2">$2</a>.</p>

<p>Este é um projeto novo, então, por favor, nos escreva se você tiver alguma dúvida!</p>

<p>-- Equipe da comunidade do Wikia (Wikia Community Team)</p>',
	'autocreatewiki-subname-answers' => 'Respostas',
);

/** Romanian (română)
 * @author Minisarm
 * @author Misterr
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'autocreatewiki' => 'Creează un site de tip wiki',
	'autocreatewiki-desc' => 'Creează wiki în Wikifactory la cererea unui utilizator',
	'autocreatewiki-page-title-default' => 'Creează un nou site de tip wiki',
	'autocreatewiki-page-title-answers' => 'Creează un nou site de răspunsuri',
	'createwiki' => 'Creează un nou site de tip wiki',
	'autocreatewiki-chooseone' => 'Alegeți una',
	'autocreatewiki-required' => '$1 = solicitat',
	'autocreatewiki-web-address' => 'Adresă web:',
	'autocreatewiki-category-select' => 'Selectați unul',
	'autocreatewiki-language-top' => 'Clasamentul primelor $1 (de) limbi',
	'autocreatewiki-language-all' => 'Toate limbile',
	'autocreatewiki-birthdate' => 'Data nașterii:',
	'autocreatewiki-blurry-word' => 'Cuvânt neclar:',
	'autocreatewiki-remember' => 'Ține-mă minte',
	'autocreatewiki-create-account' => 'Creați-vă un cont',
	'autocreatewiki-done' => 'rezolvat',
	'autocreatewiki-error' => 'eroare',
	'autocreatewiki-haveaccount-question' => 'Aveți deja un cont Wikia?',
	'autocreatewiki-success-title-default' => 'Site-ul dumneavoastră de tip wiki a fost creat cu succes!',
	'autocreatewiki-success-title-answers' => 'Site-ul dumneavoastră de răspunsuri a fost creat!',
	'autocreatewiki-success-subtitle' => 'Puteți începe acum lucrul pe acest wiki vizitând:',
	'autocreatewiki-success-has-been-created' => 'a fost creat!',
	'autocreatewiki-success-get-started' => 'Începeți',
	'autocreatewiki-info-domain' => 'Cel mai bun mod de a căuta un subiect este să utilizați cuvinte cheie.',
	'autocreatewiki-info-topic' => 'Adăugați o scurtă descriere, cum ar fi „Star Wars” sau „emisiuni TV”.',
	'autocreatewiki-info-category-default' => 'Acest lucru îi va ajuta pe vizitatori să găsească site-ul dumneavoastră de tip wiki.',
	'autocreatewiki-info-category-answers' => 'Acest lucru îi va ajuta pe vizitatori să găsească site-ul dumneavoastră de răspunsuri.',
	'autocreatewiki-info-language' => 'Aceasta va fi limba implicită a interfeței pentru vizitatorii site-ului dumneavoastră de tip wiki.',
	'autocreatewiki-info-email-address' => 'Adresa dvs. de email nu va fi niciodată văzută pe vreun proiect Wikia.',
	'autocreatewiki-limit-creation' => 'Ați depășit numărul maxim de site-uri wiki create în 24 de ore ($1).',
	'autocreatewiki-empty-field' => 'Te rugăm completează acest câmp.',
	'autocreatewiki-empty-username' => 'Numele de utilizator nu poate fi gol.',
	'autocreatewiki-empty-password' => 'Parola nu poate fi goală.',
	'autocreatewiki-category-label' => 'Categorie:',
	'autocreatewiki-invalid-birthday' => 'Data naşterii invalidă',
	'autocreatewiki-step0' => 'Se iniţializează procesul...',
	'autocreatewiki-stepdefault' => 'Procesul rulează, vă rugăm aşteptaţi...',
	'autocreatewiki-step2' => 'Se creează baza de date...',
	'autocreatewiki-step3' => 'Se setează informaţiile implicite în baza de date...',
	'autocreatewiki-step4' => 'Se creează imaginile implicite şi logourile...',
	'autocreatewiki-congratulation' => 'Felicitări!',
	'autocreatewiki-welcometalk-log' => 'Mesaj de bun venit',
	'autocreatewiki-step2-error' => 'Baza de date există!',
	'newwikis' => 'Wiki-uri noi',
	'autocreatewiki-subname-answers' => 'Răspunsuri',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'autocreatewiki-done' => 'fatte',
	'autocreatewiki-error' => 'errore',
);

/** Russian (русский)
 * @author DCamer
 * @author Eleferen
 * @author Grigol
 * @author Kuzura
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'autocreatewiki' => 'Создать новую вики',
	'autocreatewiki-desc' => 'Создание вики на Вики-фабрике по запросам участников',
	'autocreatewiki-page-title-default' => 'Создание новой вики',
	'autocreatewiki-page-title-answers' => 'Создать новый сайт ответов',
	'createwiki' => 'Создание новой вики',
	'autocreatewiki-chooseone' => 'Выберите из списка',
	'autocreatewiki-required' => '$1 = обязательно',
	'autocreatewiki-web-address' => 'Веб-адрес:',
	'autocreatewiki-category-select' => 'Выберите',
	'autocreatewiki-language-top' => '$1 наиболее используемых языков',
	'autocreatewiki-language-all' => 'Все языки',
	'autocreatewiki-birthdate' => 'Дата рождения:',
	'autocreatewiki-blurry-word' => 'Размытое слово:',
	'autocreatewiki-remember' => 'Запомнить меня',
	'autocreatewiki-create-account' => 'Создание учётной записи',
	'autocreatewiki-done' => 'выполнено',
	'autocreatewiki-error' => 'ошибка',
	'autocreatewiki-haveaccount-question' => 'У вас уже есть учётная записи в Викиа?',
	'autocreatewiki-success-title-default' => 'Ваша вики была создана!',
	'autocreatewiki-success-title-answers' => 'Ваши сайт ответов был создан!',
	'autocreatewiki-success-subtitle' => 'Теперь вы можете начинать работать в вашей вики, перейдя на страницу:',
	'autocreatewiki-success-has-been-created' => 'был создан!',
	'autocreatewiki-success-get-started' => 'Начало работы',
	'autocreatewiki-info-domain' => 'Лучше использовать такое слово, которое для вашей темы является ключевым при поиске.',
	'autocreatewiki-info-topic' => 'Добавьте краткое описание, например, «Звёздные войны» или «ТВ-шоу».',
	'autocreatewiki-info-category-default' => 'Это поможет посетителям найти вашу вики.',
	'autocreatewiki-info-category-answers' => 'Это поможет посетителям найти ваш сайт ответов.',
	'autocreatewiki-info-language' => 'Язык по умолчанию для посетителей вашей вики.',
	'autocreatewiki-info-email-address' => 'Адрес вашей электронной почты никому не показывается в Викии.',
	'autocreatewiki-info-realname' => 'Если вы решите указать его, то оно будет использовано для указания авторства вашей работы.',
	'autocreatewiki-info-birthdate' => 'Wikia требует, чтобы все пользователи указывали свою настоящую дату рождения, это является мерой предосторожности, позволяет обеспечить соответствие сайта требованиям федеральных правил.',
	'autocreatewiki-info-blurry-word' => 'Пожалуйста, введите размытые слова, которые вы видите в этой области. Это делается для защиты от автоматического создания учётных записей.',
	'autocreatewiki-info-terms-agree' => 'Создавая вики и учётную запись, вы соглашаетесь с <a href="http://www.wikia.com/wiki/Terms_of_use">Условиями использования Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Только для персонала:</b> Указанный участник будет показан как учредитель.',
	'autocreatewiki-title-template' => '$1 вики',
	'autocreatewiki-limit-day' => 'Wikia превысила максимальное число вики, создаваемых за день ($1).',
	'autocreatewiki-limit-creation' => 'Вы превысили максимальное количество вики, которое можно создать за 24 часа ($1).',
	'autocreatewiki-empty-field' => 'Пожалуйста, заполните это поле.',
	'autocreatewiki-bad-name' => 'Название не может содержать специальные символы (например, $ или @) и должно быть представлено одним словом, написанным строчными буквами без пробелов.',
	'autocreatewiki-invalid-wikiname' => 'Название не может содержать специальные символы (например, $ или @) и не может быть пустым',
	'autocreatewiki-violate-policy' => 'Это название вики содержит слова, которые нарушают наши правила именования',
	'autocreatewiki-name-taken' => 'Вики с таким URL уже существует. Вы можете присоединиться к проекту <a href="http://$1.wikia.com">http://$1.wikia.com</a> или выбрать другой адрес.',
	'autocreatewiki-name-too-short' => 'Это название слишком короткое. Пожалуйста, выберите название длиной не менее 3 символов.',
	'autocreatewiki-name-too-long' => 'Это название слишком длинное. Пожалуйста, выберите название длиной не более 50 символов.',
	'autocreatewiki-similar-wikis' => 'Ниже приведены уже существующие вики по этой теме. Мы предлагаем редактировать одну из них.',
	'autocreatewiki-invalid-username' => 'Недопустимое имя участника.',
	'autocreatewiki-busy-username' => 'Это имя участника уже занято.',
	'autocreatewiki-blocked-username' => 'Вы не можете создать учётную запись.',
	'autocreatewiki-user-notloggedin' => 'Ваша учётная запись была создана, но вы не вошли в систему!',
	'autocreatewiki-empty-language' => 'Пожалуйста, выберите язык для вики.',
	'autocreatewiki-empty-category' => 'Пожалуйста, выберите одну из категорий.',
	'autocreatewiki-empty-wikiname' => 'Название вики не может быть пустым.',
	'autocreatewiki-empty-username' => 'Имя участника не может быть пустым.',
	'autocreatewiki-empty-password' => 'Пароль не может быть пустым.',
	'autocreatewiki-empty-retype-password' => 'Повтор пароля не может быть пустым.',
	'autocreatewiki-category-label' => 'Категория:',
	'autocreatewiki-category-other' => 'Другое',
	'autocreatewiki-set-username' => 'Сначала выберите имя участника.',
	'autocreatewiki-invalid-category' => 'Неправильное значение категории.
Пожалуйста, выберите возможный вариант из выпадающего списка.',
	'autocreatewiki-invalid-language' => 'Неправильное значение языка.
Пожалуйста, выберите возможный вариант из выпадающего списка.',
	'autocreatewiki-invalid-retype-passwd' => 'Пожалуйста, введите повторно тот же самый пароль',
	'autocreatewiki-invalid-birthday' => 'Неверная дата рождения',
	'autocreatewiki-limit-birthday' => 'Невозможно создать регистрацию.',
	'autocreatewiki-log-title' => 'Ваша вики создаётся',
	'autocreatewiki-step0' => 'Процесс инициализации…',
	'autocreatewiki-stepdefault' => 'Процесс запущен, пожалуйста, подождите …',
	'autocreatewiki-errordefault' => 'Процесс не был завершён …',
	'autocreatewiki-step1' => 'Создание директории изображений …',
	'autocreatewiki-step2' => 'Создание базы данных …',
	'autocreatewiki-step3' => 'Установка информации по умолчанию в базе данных …',
	'autocreatewiki-step4' => 'Копирование изображений по умолчанию и логотипа …',
	'autocreatewiki-step5' => 'Установка стандартных переменных в базе данных …',
	'autocreatewiki-step6' => 'Установка стандартных таблиц в базе данных …',
	'autocreatewiki-step7' => 'Установка начального языка …',
	'autocreatewiki-step8' => 'Настройка групп участников и категорий …',
	'autocreatewiki-step9' => 'Установка переменных для новой вики …',
	'autocreatewiki-step10' => 'Настройка страниц на центральной вики …',
	'autocreatewiki-step11' => 'Отправка сообщения на электронную почту участника …',
	'autocreatewiki-redirect' => 'Перенаправление в новую вики: $1 …',
	'autocreatewiki-congratulation' => 'Поздравляем!',
	'autocreatewiki-welcometalk-log' => 'Сообщение приветствия',
	'autocreatewiki-regex-error-comment' => 'использовано в вики $1 (полный текст: $2)',
	'autocreatewiki-step2-error' => 'База данных существует!',
	'autocreatewiki-step3-error' => 'Не удаётся установить в базе данных сведения по умолчанию!',
	'autocreatewiki-step6-error' => 'Не удаётся установить таблицы по умолчанию в базе данных!',
	'autocreatewiki-step7-error' => 'Не удаётся скопировать начальную базу данных для языка!',
	'autocreatewiki-protect-reason' => 'Часть официального интерфейса',
	'autocreatewiki-welcomesubject' => 'Создание $1 прошло успешно!',
	'autocreatewiki-welcomebody' => 'Здравствуйте, $2.

Ваша вики была создана! Взгляните: <$1>

Готовы начать? Мы добавили несколько ссылок на вашу страницу обсуждения (<$5>), которые помогут вам начать работу и покажут вам множество полезных областей Викия. Если у вас есть какие-либо вопросы или вы почувствовали, что немного растеряны, ответьте на это письмо или ознакомьтесь с нашей Справкой <http://help.wikia.com>.

Вы также можете посмотреть блог для администраторов на Центральной Вики <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> или блог сотрудников Викия <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog>, чтобы найти полезные советы, информацию о новых возможностях Викия и новых приложениях, которые доступны в настоящий момент.

Счастливого редактирования!

$3

Команда сообщества Викия

<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Хотите получать менньше писем от нас? Вы можете отписаться от рассылки или изменить её на странице личных настроек:  http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk-wall-title' => 'Добро пожаловать!',
	'autocreatewiki-welcometalk-wall' => 'Привет!
Мы рады, что  {{subst:SITENAME}} стала частью сообщества Викия! Вам ещё многое предстоит сделать, поэтому мы хотим дать вам несколько советов и полезных ссылок, которые помогут вам начать:
*Загляните на [[w:c:ru.community|Вики Сообщества]] и посмотрите [[w:c:ru.community:Категория:Советы|список советов]] о том, как сделать так, чтобы вики росла.
*Прочтите [[w:c:ru.community|последние записи в блогах]], чтобы узнать о новых возможностях и обновления Викия.
*Если вы знаете английский, то вас обязательно заинтересуют [[w:c:community:Webinars|вебинары]], которые проводят сотрудники Викия.
*Не забудьте проверить страницу [[Special:WikiFeatures|приложения Викия]], где вы можете подключить новые возможности для своей вики.
*[[w:c:ru.community:Форум:Сообщество|Наш Форум]] всегда открыт для вас. На нём вы можете задать любой вопрос и получить ответ на него от опытных участников разных викий.
*Наконец, не забывайте о [[Справка:Содержание|страницах Справка]], где есть ответы на большинство простых вопросов.
Все вышеприведённые страницы являются отличным местом, чтобы изучить основы создания вики. Если же вы всё-таки не нашли ответа на свой вопрос, вы всегда можете спросить непосредственно [[Special:Contact|сотрудников Викия]]. Самое главное помнить, что в первую очередь вы должны получать удовольствие от своей вики! :)
Счастливого редактирования!', # Fuzzy
	'autocreatewiki-welcometalk' => "== Добро пожаловать! ==
<div style=\"font-size:120%; line-height:1.2em;\">Здравствуйте, \$1 — мы рады, что '''\$4''' — часть сообщества Wikia!

Теперь у вас есть целый сайт для добавления информации, фотографий и видео на свою любимую тему. Но сейчас на вас смотрят пустые страницы… Страшно, да? Вот некоторые способы, чтобы начать работу.

* '''Представьте свою тему''' на первой странице. Это ваша возможность объяснить вашим читателям, о чём ваша тема. Пишите сколько хотите! Ваше описание может связать все важные страницы на вашем сайте.

* '''Дайте начало новым страницам''' — только одно или два предложения чтобы начать. Не делайте пустых страниц! Смысл вики в добавлении и изменении статей по мере вашего продвижения вперёд. Вы также можете добавить фотографии и видео, чтобы заполнить страницу и сделать её более интересной.

А потом просто идите! Люди любят посещать вики с большим количеством материала для чтения и просмотра, поэтому продолжайте добавлять материал, и вы будете привлекать читателей и редакторов.  Предстоит много чего сделать, но не волнуйтесь — сегодня первый день, а у вас много времени. Любая вики начинается точно так же — понемногу за раз, начиная с первых нескольких страниц, пока она не превращается в огромный, оживлённый сайт.

Если у вас есть вопросы, вы можете написать нам через [[Special:Contact|контактную форму]]. Удачи!

— [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Новые вики',
	'newwikisstart' => 'Показать вики, начиная с:',
	'autocreatewiki-reminder-body' => 'Здравствуйте, $1.

Поздравляем с началом работы вашей новой вики, {{SITENAME}}! Вы можете вернуться и добавить ещё вики, посетив $2.

Это совершенно новый проект, поэтому, пожалуйста, напишите нам, если у вас есть какие-либо вопросы!

-- Команда сообщества Wikia',
	'autocreatewiki-reminder-body-HTML' => '<p>Здравствуйте, $1.</p>

<p>Поздравляем с началом работы вашей новой вики, translatewiki.net! Вы можете вернуться и добавить ещё вики, посетив <a href="$2">$2</a>.</p>

<p>Это совершенно новый проект, поэтому, пожалуйста, напишите нам, если у вас есть какие-либо вопросы!</p>

<p>-- Команда сообщества Wikia</p>',
	'autocreatewiki-subname-answers' => 'Ответы',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Nikola Smolenski
 * @author Rancher
 * @author Verlor
 * @author Жељко Тодоровић
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'autocreatewiki' => 'Направи нову викију',
	'autocreatewiki-page-title-default' => 'Стварање новог викија',
	'createwiki' => 'Направи нову викију',
	'autocreatewiki-category-select' => 'Изаберите',
	'autocreatewiki-language-top' => 'Најбољих $1 језика',
	'autocreatewiki-language-all' => 'Сви језици',
	'autocreatewiki-birthdate' => 'Датум рођења:',
	'autocreatewiki-blurry-word' => 'Мутна реч:',
	'autocreatewiki-remember' => 'Запамти ме',
	'autocreatewiki-create-account' => 'Отвори налог',
	'autocreatewiki-done' => 'готово',
	'autocreatewiki-error' => 'грешка',
	'autocreatewiki-haveaccount-question' => 'Имате ли налог на Викији?',
	'autocreatewiki-success-title-default' => 'Ваша викија је направљена!',
	'autocreatewiki-success-has-been-created' => 'је направљена!',
	'autocreatewiki-success-get-started' => 'Увод',
	'autocreatewiki-info-category-default' => 'Ово ће помоћи да посетиоци пронађу вашу викију.',
	'autocreatewiki-info-category-answers' => 'Ово ће помоћи посетиоцима да пронађу ваш сајт с одговорима.',
	'autocreatewiki-info-language' => 'Ово ће бити подразумевани језик за посетиоце ваше викије.',
	'autocreatewiki-info-email-address' => 'Ваша е-адреса се не приказује другима.',
	'autocreatewiki-info-terms-agree' => 'Прављењем викије и налога прихватате <a href="http://www.wikia.com/wiki/Terms_of_use">правилник</a>',
	'autocreatewiki-empty-field' => 'Попуните ово поље.',
	'autocreatewiki-name-taken' => 'Већ постоји вики с тим називом. Почните да уређујете на <a href="http://$1.wikia.com">http://$1.wikia.com</a> или изаберите другу адресу.',
	'autocreatewiki-invalid-username' => 'Корисничко име је неисправно.',
	'autocreatewiki-busy-username' => 'Корисничко име је заузето.',
	'autocreatewiki-blocked-username' => 'Не можете направити налог.',
	'autocreatewiki-user-notloggedin' => 'Ваш налог је отворен, али нисте пријављени!',
	'autocreatewiki-empty-language' => 'Изаберите језик овог викија.',
	'autocreatewiki-empty-category' => 'Изаберите категорију.',
	'autocreatewiki-empty-wikiname' => 'Назив викија не може остати празан.',
	'autocreatewiki-empty-username' => 'Корисничко име не може остати празно.',
	'autocreatewiki-empty-password' => 'Лозинка не може остати празна.',
	'autocreatewiki-empty-retype-password' => 'Лозинка за потврђивање не може остати празна.',
	'autocreatewiki-category-label' => 'Категорија:',
	'autocreatewiki-category-other' => 'Друго',
	'autocreatewiki-set-username' => 'Унесите корисничко име.',
	'autocreatewiki-invalid-birthday' => 'Датум рођења је неисправан',
	'autocreatewiki-log-title' => 'Ваша викија се прави...',
	'autocreatewiki-step0' => 'Покретање поступка...',
	'autocreatewiki-stepdefault' => 'Поступак је покренут. Молимо, сачекајте...',
	'autocreatewiki-errordefault' => 'Поступак није завршен.',
	'autocreatewiki-step1' => 'Правим фасциклу за слике…',
	'autocreatewiki-step2' => 'Правим базу података…',
	'autocreatewiki-step11' => 'Шаљем е-поруку кориснику…',
	'autocreatewiki-redirect' => 'Преусмеравање на нову викију: $1...',
	'autocreatewiki-congratulation' => 'Честитамо!',
	'autocreatewiki-welcometalk-log' => 'Порука добродошлице',
	'autocreatewiki-step2-error' => 'База података постоји!',
	'autocreatewiki-protect-reason' => 'Део званичног сучеља',
	'autocreatewiki-welcomesubject' => '$1 је направљена!',
	'newwikis' => 'Нови викији',
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
	'autocreatewiki-reminder-body' => 'Драги $1:

Честитамо вам на прављењу нове викије, {{SITENAME}}! Много тога можете додати кликом на $2.

Ово је нов новцат пројекат, зато вас молимо да нам пишете уколико имате било каквих питања.

– Тим Викија заједнице',
	'autocreatewiki-reminder-body-HTML' => '<p>Драги $1:</p>

<p>Честитамо вам на прављењу нове викије, {{SITENAME}}! Доста тога можете додати кликом на
<a href="$2">$2</a>.</p>

<p>Ово је нов новцат пројекат, зато вас молимо да нам пишете уколико имате било каквих питања.</p>

<p>– Тим Викија заједнице</p>',
	'autocreatewiki-subname-answers' => 'Одговори',
);

/** Swedish (svenska)
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'autocreatewiki' => 'Skapa en ny wiki',
	'autocreatewiki-desc' => 'Create wiki in WikiFactory by user requests',
	'autocreatewiki-page-title-default' => 'Skapa en ny wiki',
	'autocreatewiki-page-title-answers' => 'Skapa en ny Svar-sida',
	'createwiki' => 'Skapa en ny wiki',
	'autocreatewiki-chooseone' => 'Välj en',
	'autocreatewiki-required' => '$1 = krävs',
	'autocreatewiki-web-address' => 'Webbadress:',
	'autocreatewiki-category-select' => 'Välj en',
	'autocreatewiki-language-top' => 'Topp $1-språk',
	'autocreatewiki-language-all' => 'Alla språk',
	'autocreatewiki-birthdate' => 'Födelsedatum:',
	'autocreatewiki-blurry-word' => 'Suddigt ord:',
	'autocreatewiki-remember' => 'Kom ihåg mig',
	'autocreatewiki-create-account' => 'Skapa ett konto',
	'autocreatewiki-done' => 'klar',
	'autocreatewiki-error' => 'fel',
	'autocreatewiki-haveaccount-question' => 'Har du redan ett konto hos Wikia?',
	'autocreatewiki-success-title-default' => 'Din wiki har skapats!',
	'autocreatewiki-success-title-answers' => 'Din Svar-sida har skapats!',
	'autocreatewiki-success-subtitle' => 'Du kan nu börja arbeta med din wiki genom att besöka:',
	'autocreatewiki-success-has-been-created' => 'har skapats!',
	'autocreatewiki-success-get-started' => 'Kom igång',
	'autocreatewiki-info-domain' => 'Det är bäst att använda ett ord är ett sannolikt sökord för ditt ämne.',
	'autocreatewiki-info-topic' => 'Lägg till en kort beskrivning, som "Star Wars" eller "TV-program".',
	'autocreatewiki-info-category-default' => 'Detta kommer att hjälpa besökare att hitta din wiki.',
	'autocreatewiki-info-category-answers' => 'Detta kommer att hjälpa besökare att hitta din Svarsida.',
	'autocreatewiki-info-language' => 'Detta kommer att vara standardspråket för dina besökare på din wiki.',
	'autocreatewiki-info-email-address' => 'Din e-postadress visas aldrig för någon på Wikia.',
	'autocreatewiki-info-realname' => 'Om du väljer att ange det, kommer det att användas för att tillskriva dig ditt arbete.',
	'autocreatewiki-info-birthdate' => 'Wikia kräver att alla användare ger ut sina verkliga födelsedatum, som både en säkerhetsåtgärd och som ett sätt att bevara integriteten på sidan under iakttagande av nationella bestämmelser.',
	'autocreatewiki-info-blurry-word' => 'För att skydda sidan mot automatiskt skapande konton, skriver du in det suddiga ordet som du ser i detta fält.',
	'autocreatewiki-info-terms-agree' => 'Genom att skapa en wiki och ett användarkonto, accepterar du <a href="http://www.wikia.com/wiki/Terms_of_use">Wikias Användarvillkor</a>',
	'autocreatewiki-info-staff-username' => '<b>Endast personal:</b> Den angivna användaren kommer att anges som grundare.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Wikia har överskridit det maximala antalet av skapade wikis idag ($1).',
	'autocreatewiki-limit-creation' => 'Du har överskridit det maximala antalet av wiki-skapande på 24 timmar ($1).',
	'autocreatewiki-empty-field' => 'Vänligen fyll i detta område.',
	'autocreatewiki-bad-name' => 'Namnet får inte innehålla specialtecken (som $ eller @) och måsta vara ett enda ord med små bokstäver utan mellanslag.',
	'autocreatewiki-invalid-wikiname' => 'Namnet får inte innehålla specialtecken (som $ eller @) och får inte vara tomt',
	'autocreatewiki-violate-policy' => 'Detta wikinamn innehåller ett ord som bryter mot vår namngivnings-politik',
	'autocreatewiki-name-taken' => 'En wiki med denna adress finns redan. Börja redigera på <a href="http://$1.wikia.com">http://$1.wikia.com</a> eller välj en annan adress.',
	'autocreatewiki-name-too-short' => 'Denna adress är för kort. Välj en adress med minst 3 tecken.',
	'autocreatewiki-name-too-long' => 'Denna adress är för långt. Välj en adress med högst 50 tecken.',
	'autocreatewiki-similar-wikis' => 'Nedan visas de wikis som redan skapats på detta ämne. Vi föreslår att du redigerar en av dem.',
	'autocreatewiki-invalid-username' => 'Detta användarnamn är ogiltigt.',
	'autocreatewiki-busy-username' => 'Detta användarnamn är upptaget.',
	'autocreatewiki-blocked-username' => 'Du kan inte skapa ett konto.',
	'autocreatewiki-user-notloggedin' => 'Ditt konto skapades men loggades inte in!',
	'autocreatewiki-empty-language' => 'Välj språk för wikin.',
	'autocreatewiki-empty-category' => 'Välj en kategori.',
	'autocreatewiki-empty-wikiname' => 'Namnet på wikin kan inte vara tomt.',
	'autocreatewiki-empty-username' => 'Användarnamnet kan inte vara tomt.',
	'autocreatewiki-empty-password' => 'Lösenordet kan inte vara tomt.',
	'autocreatewiki-empty-retype-password' => 'Det upprepande lösenordet kan inte vara tom.',
	'autocreatewiki-category-label' => 'Kategori:',
	'autocreatewiki-category-other' => 'Annat',
	'autocreatewiki-set-username' => 'Sätt ett användarnamn först.',
	'autocreatewiki-invalid-category' => 'Ogiltigt värde på kategori. 
Välj rätt från rullgardinsmenyn.',
	'autocreatewiki-invalid-language' => 'Ogiltigt värde av språk. 
Välj rätt från rullgardinsmenyn.',
	'autocreatewiki-invalid-retype-passwd' => 'Vänligen skriv in samma lösenord som ovan',
	'autocreatewiki-invalid-birthday' => 'Ogiltigt födelsedatum',
	'autocreatewiki-limit-birthday' => 'Det gick inte att skapa registrering.',
	'autocreatewiki-log-title' => 'Din wiki skapas',
	'autocreatewiki-step0' => 'Initierar processen ...',
	'autocreatewiki-stepdefault' => 'Processen är igång, vänta ...',
	'autocreatewiki-errordefault' => 'Processen var inte klar ...',
	'autocreatewiki-step1' => 'Skapar mapp för bilder ...',
	'autocreatewiki-step2' => 'Skapar databas ...',
	'autocreatewiki-step3' => 'Sätter grundinformation i databasen ...',
	'autocreatewiki-step4' => 'Kopierar standard-bilder och logotyp ...',
	'autocreatewiki-step5' => 'Sätter grundvariabler i databasen ...',
	'autocreatewiki-step6' => 'Sätter grundtabeller i databasen ...',
	'autocreatewiki-step7' => 'Sätter in språk-startaren ...',
	'autocreatewiki-step8' => 'Ställer in användargrupper och kategorier ...',
	'autocreatewiki-step9' => 'Ställer in variabler för den nya wikin ...',
	'autocreatewiki-step10' => 'Ställer in sidor på centrala wikin ...',
	'autocreatewiki-step11' => 'Skickar e-post till användare ...',
	'autocreatewiki-redirect' => 'Omdirigerar till nya wikin: $1 ...',
	'autocreatewiki-congratulation' => 'Grattis!',
	'autocreatewiki-welcometalk-log' => 'Välkomstmeddelande',
	'autocreatewiki-regex-error-comment' => 'används i wikin $1 (hela texten: $2)',
	'autocreatewiki-step2-error' => 'Databasen existerar!',
	'autocreatewiki-step3-error' => 'Kan inte sätta in standardinformation i databasen!',
	'autocreatewiki-step6-error' => 'Kan inte sätta in standardtabeller i databasen!',
	'autocreatewiki-step7-error' => 'Kan inte kopiera databasen för språk!',
	'autocreatewiki-protect-reason' => 'Del av det officiella gränssnittet',
	'autocreatewiki-welcomesubject' => '$1 har skapats!',
	'autocreatewiki-welcomebody' => 'Hej $2!

Din wiki har skapats! Spana in den: <$1>

Är du redo att komma igång? Vi har lagt till några länkar på din diskussionssida (<$5>) för att hjälpa dig komma igång och uppmuntra dig att utforska de användbara områdena runt Wikia. Om du har några frågor eller känner dig lite vilse, svara på detta e-postmeddelande eller kolla på våra hjälpsidor <http://help.wikia.com>.

Du kan också kolla på Grundar- och administratörsbloggen <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> och Wikias personalblogg <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> där du kan hitta tips och tricks, information om nya funktioner och nya saker som händer på Wikia.

Lycka till med redigeringen!

$3

Wikias gemenskapssupport

<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Vill du få färre meddelanden från oss? Du kan avprenumerera eller ändra din e-postadress här: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk-wall-title' => 'Välkommen!',
	'autocreatewiki-welcometalk-wall' => 'Hallå där!
Vi är glada att ha {{subst:SITENAME}} som en del av Wikias gemenskap! Det finns fortfarande mycket att göra, så här kommer några hjälpsamma tips och länk för att få din wiki att komma igång:
*Vet du inte var du ska börja? Titta in på [[w:c:community:Admin_Central:Main_Page|Grundar- &amp; administratörscentralen]] och kolla in [[w:c:community:Blog:Wikia_Founders_&_Admins|bloggen]] för tips om hur man du kan sparka igång din wiki och få den att växa!
*Besök [[w:c:community:main page|Gemenskapscentralen]] för att få vänner via [[w:c:community:Special:Chat|chatten]], lär dig om nya funktioner och bli uppdaterad om Wikias nyheter och uppkommande funktioner på [[w:c:community:Blog:Wikia_Staff_Blog|personalbloggen]].
*Spana in våra [[w:c:community:Webinars|webbkonferenser]] -- där kan du registrera dig för att samverka med Wikias personal, såväl som att titta på föregående sessionser
*Se till att titta på [[Special:WikiFeatures|Wiki-funktioner]] för att se vilka funktioner du kan aktivera på din wiki!
*Utforska våra [[w:c:community:Admin_Central:Forum|forum]] på Grundar- och administratörscentralen för att se vad andra wiki-administratörer frågar. 
*Slutligen, besök våra [[w:c:community:Help:Contents|Hjälpsidor]] för att besvara några specifika frågor du kanske har.
Alla ovanstående länkar är perfekta platser att starta utforska Wikia. Om du fastnar eller har en fråga som du inte kan hitta svaret till -- var god kontakta oss [[Special:Contact|här]]. Men framförallt, ha kul! :)
Ha det så kul med redigeringen!',
	'autocreatewiki-welcometalk' => "== Välkommen! ==
<div style=\"font-size:120%; line-height:1.2em;\">Hej \$1 -- vi är glada över att ha '''\$4''' som en del av Wikia-gemenskapen!

Nu har du en hel webbsida att fylla med information, bilder och videoklipp om ditt favoritämne. Men just nu är det bara blanka sidor som stirrar på dig... Skrämmande, heller hur? Här är några sätt om hur du kommer igång.

* '''Presentera ditt ämne''' på framsidan. Detta är din chans att förklara för alla besökare vad ditt ämne handlar om. Skriv så mycket du vill! Din beskrivning kan länka till alla viktiga sidor på din wiki.

* '''Skriv några nya sidor''' -- bara en eller två meningar är en bra början. Låt inte de tomma sidorna titta på dig! En wiki handlar om att lägga till och förändra saker med tiden. Du kan också lägga till bilder och videoklipp för att fylla upp sidan och göra den mer intressant.

Och sedan är det bara att fortsätta! Människor gillar att besöka wikis där det finns mycket av saker att titta på och läsa, så fortsätt lägga till saker, så kommer du att locka till dig läsare och redaktörer. Det finns massor av saker att göra ännu, men oroa dig inte -- idag är det din första dag, och du har gott om tid. Varje wiki börjar på samma sätt -- en liten bit i taget, några sidor åt gången, tills den växer till en enorm, befolkad sida.

Om du har några frågor kan du alltid skicka ett e-post till oss via vårt [[Special:Contact|kontaktformulär]]. Ha så kul!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Nya wikis',
	'newwikisstart' => 'Visa wikis som börjar med:',
	'autocreatewiki-reminder-body' => 'Kära $1:

Vi vill gratulera dig till din nya wiki, {{SITENAME}}! Du kan komma tillbaka och lägga till mer till din wiki genom att besöka $2.

Detta är ett helt nytt projekt, så skriv till oss om du har några frågor!


-- Wikia Community Team',
	'autocreatewiki-reminder-body-HTML' => '<p>Kära $1:</p>

<p>Vi vill gratulera dig till din nya wiki, {{SITENAME}}! Du kan komma tillbaka och lägga till mer till din wiki genom att besöka
<a href="$2">$2</a>.</p>

<p>Detta är ett helt nytt projekt, så skriv till oss om du har några frågor!</p>

<p>-- Wikia Community Team</p>',
	'autocreatewiki-subname-answers' => 'Svar',
);

/** Swahili (Kiswahili)
 */
$messages['sw'] = array(
	'autocreatewiki-create-account' => 'Sajili akaunti',
	'autocreatewiki-error' => 'hitilafu',
	'autocreatewiki-category-label' => 'Jamii:',
	'autocreatewiki-category-other' => 'Nyingine',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author TRYPPN
 * @author செல்வா
 */
$messages['ta'] = array(
	'autocreatewiki-category-select' => 'ஒன்றைத் தேர்வு செய்யவும்',
	'autocreatewiki-language-all' => 'அனைத்து மொழிகள்',
	'autocreatewiki-birthdate' => 'பிறந்த நாள்:',
	'autocreatewiki-remember' => 'என்னை நினைவில் வைத்துக்கொள்ளவும்',
	'autocreatewiki-create-account' => 'கணக்கு ஒன்றை உருவாக்கவும்',
	'autocreatewiki-done' => 'செய்துமுடிக்கப்பட்டது',
	'autocreatewiki-error' => 'தவறு',
	'autocreatewiki-success-title-default' => 'தங்களது விக்கி உருவாக்கப்பட்டுவிட்டது',
	'autocreatewiki-title-template' => '$1 விக்கி',
	'autocreatewiki-category-label' => 'பகுப்பு:',
	'autocreatewiki-category-other' => 'மற்றவை',
	'autocreatewiki-log-title' => 'தங்களது விக்கி உருவாக்கப்பட்டுவிட்டது',
	'autocreatewiki-welcometalk-log' => 'வரவேற்பு செய்தி',
	'newwikis' => 'புதிய விக்கிகள்',
);

/** Telugu (తెలుగు)
 * @author Praveen Illa
 * @author Veeven
 */
$messages['te'] = array(
	'autocreatewiki-required' => '$1 = తప్పనిసరి',
	'autocreatewiki-web-address' => 'జాల చిరునామా:',
	'autocreatewiki-language-all' => 'అన్ని భాషలు',
	'autocreatewiki-birthdate' => 'పుట్టిన రోజు:',
	'autocreatewiki-remember' => 'నన్ను గుర్తుంచుకో',
	'autocreatewiki-title-template' => '$1 వికీ',
	'autocreatewiki-category-label' => 'వర్గం:',
	'autocreatewiki-category-other' => 'ఇతర',
	'autocreatewiki-congratulation' => 'అభినందనలు!',
	'autocreatewiki-welcometalk-log' => 'స్వాగత సందేశం',
	'newwikis' => 'కొత్త వికీలు',
	'autocreatewiki-subname-answers' => 'జవాబులు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'autocreatewiki' => 'Lumikha ng isang bagong wiki',
	'autocreatewiki-desc' => 'Lumikha ng wiki sa WikiPabrika ayon sa mga kahilingan ng tagagamit',
	'autocreatewiki-page-title-default' => 'Lumikha ng isang bagong wiki',
	'autocreatewiki-page-title-answers' => 'Lumikha ng isang bagong sityo ng Mga Sagot',
	'createwiki' => 'Lumikha ng isang bagong wiki',
	'autocreatewiki-chooseone' => 'Pumili ng isa',
	'autocreatewiki-required' => '$1 = kailangan',
	'autocreatewiki-web-address' => 'Tirahan ng web:',
	'autocreatewiki-category-select' => 'Pumili ng isa',
	'autocreatewiki-language-top' => 'Pinakamataas na $1 na mga wika',
	'autocreatewiki-language-all' => 'Lahat ng mga wika',
	'autocreatewiki-birthdate' => 'Kaarawan:',
	'autocreatewiki-blurry-word' => 'Malabong salita:',
	'autocreatewiki-remember' => 'Tandaan ako',
	'autocreatewiki-create-account' => 'Lumikha ng isang akawnt',
	'autocreatewiki-done' => 'nagawa na',
	'autocreatewiki-error' => 'kamalian',
	'autocreatewiki-haveaccount-question' => 'Mayroon ka na bang isang akawnt sa Wikia',
	'autocreatewiki-success-title-default' => 'Nalikha na ang wiki mo!',
	'autocreatewiki-success-title-answers' => 'Nalikha na ang iyong sityo ng mga sagot!',
	'autocreatewiki-success-subtitle' => 'Makapagsisimula ka nang gumawa sa iyong wiki sa pamamagitan ng pagdalaw sa:',
	'autocreatewiki-success-has-been-created' => 'ay nalikha na!',
	'autocreatewiki-success-get-started' => 'Magsimula',
	'autocreatewiki-info-domain' => 'Pinakamainam na gamitin ang isang salitang mas malamang na isang susing-salita ng paghahanap para sa iyong paksa.',
	'autocreatewiki-info-topic' => 'Magdagdag ng isang maikling paglalarawan na katulad ng "Star Wars" o "mga palabas sa TV".',
	'autocreatewiki-info-category-default' => 'Makakatulong ito sa mga panauhin na matagpuan ang wiki mo.',
	'autocreatewiki-info-category-answers' => 'Makakatulong ito sa mga panauhin na matagpuan ang sityo mo ng Mga Sagot.',
	'autocreatewiki-info-language' => 'Ito ang magiging likas na nakatakdang wika para sa mga panauhin ng wiki mo.',
	'autocreatewiki-info-email-address' => 'Hindi ipapakita kailanman ng Wikia sa sinuman ang tirahan mo ng e-liham.',
	'autocreatewiki-info-realname' => 'Kung pipiliin mong ibigay ito, gagamitin ito para sa pagbibigay ng atribusyon para sa ginawa mo.',
	'autocreatewiki-info-birthdate' => 'Kailangan ng Wikia na ang lahat ng mga tagagamit ay magbigay ng kanilang tunay na petsa ng kapanganakan kapwa bilang isang pag-iingat na pangkaligtasan at bilang isang kaparaanan ng pagpapanatili sa karangalan ng pook habang tumatalima sa mga tuntuning pederal.',
	'autocreatewiki-info-blurry-word' => 'Upang makatulong sa pagprutekta laban sa kusang paglikha ng akawnt, paki imakinilya ang malabong salita na nakikita mo sa loob ng hanay na ito.',
	'autocreatewiki-info-terms-agree' => 'Sa paglikha ng isang wiki at ng isang akawnt ng tagagamit, sumasang-ayon ka sa <a href="http://www.wikia.com/wiki/Terms_of_use">Mga Hinihingi sa Paggamit ng Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Tauhan lamang:</b> Ang tinukoy na tagagamit ay ililista bilang ang tagapagtatag.',
	'autocreatewiki-title-template' => 'Wiki ng $1',
	'autocreatewiki-limit-day' => 'Lumampas na ang Wikia sa pinaka mataas na bilang ng mga paglikha ng wiki sa araw na ito ($1).',
	'autocreatewiki-limit-creation' => 'Lumampas ka na sa pinaka mataas na bilang ng paglikha ng wiki sa loob ng 24 mga oras ($1).',
	'autocreatewiki-empty-field' => 'Pakikumpleto ang lugar na ito.',
	'autocreatewiki-bad-name' => 'Ang pangalan ay hindi maaaring maglaman ng natatanging mga panitik (katulad ng $ o @) at dapat na isang nag-iisang salitang maliliit ang mga titik na walang mga patlang.',
	'autocreatewiki-invalid-wikiname' => 'Ang pangalan ay hindi maaaring maglaman ng natatanging mga panitik (katulad ng $ o @) at hindi maaaring walang laman',
	'autocreatewiki-violate-policy' => 'Ang pangalan ng wiking ito ay naglalaman ng isang salita na lumalabag sa aming patakaran ng pagpapangalan',
	'autocreatewiki-name-taken' => 'Mayroon nang isang wiki na may ganitong tirahan. Magsimulang mamatnugot sa <a href="http://$1.wikia.com">http://$1.wikia.com</a> o pumili ng ibang tirahan.',
	'autocreatewiki-name-too-short' => 'Napaka maiksi ng tirahang ito, pumili ng isang tirahan na mayroong kahit na 3 mga panitik.',
	'autocreatewiki-name-too-long' => 'Napaka mahaba ng tirahang ito. Paki pumili ng isang tirahan na may pinaka mataas na 50 mga panitik.',
	'autocreatewiki-similar-wikis' => 'Nasa ibaba ang nalikha nang mga wiki na hinggil sa paksang ito. Iminumungkahi namin ang pamamatnugot sa isa sa mga ito.',
	'autocreatewiki-invalid-username' => 'Hindi tanggap ang pangalang pangtagagamit na ito.',
	'autocreatewiki-busy-username' => 'May nakakuha na ng pangalang pangtagagamit na ito.',
	'autocreatewiki-blocked-username' => 'Hindi mo malilikha ang akawnt.',
	'autocreatewiki-user-notloggedin' => 'Nalikha ang akawnt mo pero hindi nakalagda!',
	'autocreatewiki-empty-language' => 'Pakipili ang wika na para sa wiki.',
	'autocreatewiki-empty-category' => 'Paki pumili ng isang kategorya.',
	'autocreatewiki-empty-wikiname' => 'Hindi maaaring walang laman ang pangalan ng wiki.',
	'autocreatewiki-empty-username' => 'Hindi maaaring walang laman ang pangalang pangtagagamit.',
	'autocreatewiki-empty-password' => 'Hindi maaaring walang laman ang hudyat.',
	'autocreatewiki-empty-retype-password' => 'Hindi maaaring walang laman ang muling imakinilya ang hudyat.',
	'autocreatewiki-category-label' => 'Kategorya:',
	'autocreatewiki-category-other' => 'Iba pa',
	'autocreatewiki-set-username' => 'Itakda muna ang pangalan ng tagagamit.',
	'autocreatewiki-invalid-category' => 'Hindi katanggap-tanggap na halaga ng kategorya.
Mangyaring pumili ng angkop mula sa listahang bumabagsak pababa.',
	'autocreatewiki-invalid-language' => 'Hindi katanggap-tanggap na halaga ng wika.
Mangyaring pumili ng angkop mula sa listahang bumabagsak pababa.',
	'autocreatewiki-invalid-retype-passwd' => 'Mangyaring pakimakinilya ulit ang kaparehong hudyat na katulad ng nasa itaas',
	'autocreatewiki-invalid-birthday' => 'Hindi tanggap na petsa ng kaarawan',
	'autocreatewiki-limit-birthday' => 'Hindi nagawang likhain ang pagpapatala.',
	'autocreatewiki-log-title' => 'Nililikha na ang wiki mo',
	'autocreatewiki-step0' => 'Sinisimulan ang pagsasagawa ...',
	'autocreatewiki-stepdefault' => 'Tumatakbo ang pagsasagawa, pakihintay ...',
	'autocreatewiki-errordefault' => 'Hindi tapos ang pagsasagawa ...',
	'autocreatewiki-step1' => 'Nililikha ang sisidlan ng mga larawan ...',
	'autocreatewiki-step2' => 'Nililikha ang kalipunan ng dato ...',
	'autocreatewiki-step3' => 'Itinatalaga ang likas na nakatakdang kabatiran sa loob ng kalipunan ng dato ...',
	'autocreatewiki-step4' => 'Kinokopya ang likas na nakatakdang mga larawan at logo ...',
	'autocreatewiki-step5' => 'Itinatalaga ang likas na nakatakdang mga nagbabago sa loob ng kalipunan ng dato ...',
	'autocreatewiki-step6' => 'Itinatalaga ang likas na nakatakdang mga talahanayan sa kalipunan ng dato ...',
	'autocreatewiki-step7' => 'Itinatakda ang pangsimula ng wika ...',
	'autocreatewiki-step8' => 'Itinatakda ang mga pangkat ng tagagamit at mga kategorya ...',
	'autocreatewiki-step9' => 'Itinatakda ang mga bagay na nagpapabagu-bago para sa bagong wiki ...',
	'autocreatewiki-step10' => 'Itinatakda ang mga pahina sa lunduyang wiki ...',
	'autocreatewiki-step11' => 'Ipinapadala ang e-liham sa tagagamit ...',
	'autocreatewiki-redirect' => 'Sa halip ay pinapapunta sa bagong wiki: $1 ...',
	'autocreatewiki-congratulation' => 'Maligayang bati!',
	'autocreatewiki-welcometalk-log' => 'Pambati sa Pagdating',
	'autocreatewiki-regex-error-comment' => 'ginagamit sa loob ng wiki na $1 (buong teksto: $2)',
	'autocreatewiki-step2-error' => 'Umiiral ang kalipunan ng dato!',
	'autocreatewiki-step3-error' => 'Hindi maitakda ang likas na nakatakdang kabatiran sa loob ng kalipunan ng dato!',
	'autocreatewiki-step6-error' => 'Hindi maitakda ang likas na nakatakdang mga talahanayan sa loob ng kalipunan ng dato!',
	'autocreatewiki-step7-error' => 'Hindi makopya ang pangsimulang kalipunan ng dato para sa wika!',
	'autocreatewiki-protect-reason' => 'Bahagi ng opisyal na ugnayang-mukha',
	'autocreatewiki-welcomesubject' => 'Nalikha na ang $1!',
	'autocreatewiki-welcomebody' => 'Kumusta $2!

Nalikha na ang wiki mo! Tingnan na: <$1>

Handa ka nang magsimula? Nagdagdag kami ng ilang mga kawing sa iyong pahina ng usapan (<$5>) upang matulungan ka sa pagsisimula at upang hikayatin ka na galugarin ang maraming makatutulong na mga pook sa paligid ng Wikia. Kung mayroon kang anumang mga katanungan o nakakaramdam na tila naliligaw nang bahagya, tumugon sa e-liham na ito o tingnan ang aming mga pahina ng Tulong <http://help.wikia.com>.

Matitingnan mo rin ang blog ng Tagapagtatag at Tagapangasiwa <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> at ang blog ng tauhan ng Wikia <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog> kung saan ka makakakuha ng mga payo at mga kaparaanan, kabatiran patungkol sa bagong mga tampok at bagong mga bagay na nagaganap sa Wikia.

Maligayang pamamatnugot!

$3
Suporta ng Pamayanan ng Wikia
<http://community.wikia.com/wiki/User:$4>

___________________________________________
* Nais makatanggap ng mas kaunting mga mensahe mula sa amin? Maaari kang huwag nang magpasipi o baguhin ang iyong mga kanaisan ng e-liham dito: http://community.wikia.com/Special:Preferences',
	'autocreatewiki-welcometalk' => "== Maligayang pagdating! ==
<div style=\"font-size:120%; line-height:1.2em;\">Kumusta \$1 -- natutuwa kaming magkaroon ng '''\$4''' bilang bahagi ng pamayakan ng Wikia!

Ngayon mayroon ka nang isang buong pook sa sangkasaputan na pupunuan ng kabatiran, mga larawan at mga bidyo tungkol sa paborito mong paksa. Subalit sa ngayon, mga pahinang walang laman lamang ang nakatitig sa iyo... Nakakatakot, hindi ba? Narito ang ilang mga paraan upang makapagsimula.

* '''Ipakilala ang iyong paksa'' sa pangharapang pahina. Ito na ang iyong pagkakataon upang maipaliwanag sa mga mambabasa mo kung saan patungkol ang iyong paksa. Magsulat ng marami hangga't gusto mo! Ang paglalarawan mo ay maaaring kumawing sa lahat ng mahahalagang mga pahina sa pook mo.

* '''Magsimula ng ilang bagong mga pahina''' -- ayos lang kung isang pangungusap o dalawa lamang upang makapag-umpisa. Huwag bayaang titigan ka nang may katamlayan ng pahinang walang laman! Ang wiki ay talagang patungkol sa pagdaragdag at pagbabago ng mga bagay habang nagtatagal. Makapagdaragdag ka rin ng mga larawan at mga bidyo, upang mapunuan ang pahina at upang magawa itong mas kahali-halina.

At pagkaraan ay magpatuloy lamang nang magpatuloy! Ang mga tao ay mahihilig dumalaw sa mga wiki kung mayroong maraming mga bagay na mababasa at matatanaw, kung kaya't magpatuloy sa pagdaragdag pa ng mga bagay-bagay, at makakaakit ka ng mga mambabasa at mga patnugot. Maraming nararapat na gawin, subalit huwag mag-alala -- ngayong araw na ito ang iyong unang araw, at sagana ka sa panahon. Bawat isang wiki ay nagsisimula sa ganiyan din paraan -- unti-unti lamang bawat panahon, na nagsisimula sa unang mangilan-ngilang mga pahina, hanggang sa lumaki na ito at naging isang pagkalaki-laki at abalang pook.

Kung mayroong kang mga katanungan, mapapadalhan mo kami ng e-liham sa pamamagitan ng aming [[Special:Contact|pormularyo ng pakikipag-ugnayan]]. Magsaya ka!

-- [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Bagong mga wiki',
	'newwikisstart' => 'Ipakita ang mga wiki na nagsisimula sa:',
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
	'autocreatewiki-reminder-body' => "Minamahal na $1:

Maligayang bati sa pagsisimula ng bago mong wiki, ang {{SITENAME}}! Maaari kang bumalik at magdagdag pa sa wiki mo sa pamamagitan ng pagdalaw sa $2.

Isang itong bagung-bagong proyekto, kung kaya't sumulat sa amin kung mayroon kang anumang mga katanungan!


-- Pangkat ng Pamayanan ng Wikia",
	'autocreatewiki-reminder-body-HTML' => "<p>Minamahal na $1:</p>

<p>Maligayang bati sa pagsisimula ng bago mong wiki, ang {{SITENAME}}! Maaari kang bumalik at magdagdag pa sa wiki mo sa pamamagitan ng pagdalaw sa $2.</p>

<p>Isang itong bagung-bagong proyekto, kung kaya't sumulat sa amin kung mayroon kang anumang mga katanungan!</p>


<p>-- Pangkat ng Pamayanan ng Wikia</p>",
	'autocreatewiki-subname-answers' => 'Mga sagot',
);

/** толышә зывон (толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'autocreatewiki' => 'Тожә вики сохтеј',
	'autocreatewiki-page-title-default' => 'Тожә вики сохте',
	'createwiki' => 'Тожә вики сохте',
	'autocreatewiki-category-select' => 'Бывыжнән',
	'autocreatewiki-error' => 'сәһв',
);

/** Turkish (Türkçe)
 * @author Gizemb
 * @author Suelnur
 */
$messages['tr'] = array(
	'autocreatewiki' => 'Yeni bir wiki oluştur',
	'autocreatewiki-page-title-default' => 'Yeni bir wiki oluştur',
	'autocreatewiki-page-title-answers' => 'Yeni bir yanıt sitesi oluştur',
	'createwiki' => 'Yeni bir wiki oluştur',
	'autocreatewiki-chooseone' => 'Birini seç',
	'autocreatewiki-required' => '$1 = gerekli',
	'autocreatewiki-web-address' => 'Web adresi:',
	'autocreatewiki-category-select' => 'Birini seç',
	'autocreatewiki-birthdate' => 'Doğum günü:',
	'autocreatewiki-remember' => 'Beni hatırla',
	'autocreatewiki-create-account' => 'Bir hesap oluştur',
	'autocreatewiki-done' => 'yapıldı',
	'autocreatewiki-error' => 'hata',
	'autocreatewiki-haveaccount-question' => 'Zaten bir Wikia hesabınız var mı?',
	'autocreatewiki-success-title-answers' => 'Cevap siteniz oluşturuldu!',
	'autocreatewiki-success-subtitle' => 'Bu linki tıklayarak wikiniz üzerinde çalışmaya başlayabilirsiniz:',
	'autocreatewiki-success-has-been-created' => 'oluşturuldu!',
	'autocreatewiki-info-category-default' => 'Bu, ziyaretçilerinizin wikinizi bulmasını kolaylaştıracak.',
	'autocreatewiki-info-category-answers' => 'Bu, ziyaretçilerinizin cevap sitenizi bulmasını kolaylaştıracak.',
	'autocreatewiki-info-language' => 'Bu, ziyaretçileriniz için öntanımlı dil olacak.',
	'autocreatewiki-info-email-address' => 'E-posta adresiniz Wikia üzerinde kimseye gösterilmeyecek.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-empty-field' => 'Lütfen bu alanı doldurun.',
	'autocreatewiki-invalid-username' => 'Bu kullanıcı adı geçersiz.',
	'autocreatewiki-busy-username' => 'Bu kullanıcı adı daha önce alınmış.',
	'autocreatewiki-blocked-username' => 'Hesap oluşturamazsın.',
	'autocreatewiki-user-notloggedin' => 'Hesabın oluşturuldu ama giriş yapmadın!',
	'autocreatewiki-empty-language' => 'Lütfen wiki için dil seçin.',
	'autocreatewiki-empty-category' => 'Lütfen bir kategori seçin.',
	'autocreatewiki-empty-wikiname' => 'Wikinin adı boş olamaz.',
	'autocreatewiki-empty-username' => 'Kullanıcı adı kısmı boş olamaz.',
	'autocreatewiki-empty-password' => 'Parola kısmı boş olamaz.',
	'autocreatewiki-empty-retype-password' => 'Tekrar girilen parola kısmı boş olamaz.',
	'autocreatewiki-category-label' => 'Kategori:',
	'autocreatewiki-category-other' => 'Diğer',
	'autocreatewiki-set-username' => 'Önce kullanıcı adı belirleyin.',
	'autocreatewiki-invalid-retype-passwd' => 'Lütfen yukarıdaki parolayı aynen girin',
	'autocreatewiki-invalid-birthday' => 'Geçersiz doğum tarihi',
	'autocreatewiki-log-title' => 'Wikiniz oluşturuldu',
	'autocreatewiki-stepdefault' => 'İşlem yapılıyor, lütfen bekleyiniz...',
	'autocreatewiki-errordefault' => 'İşlem tamamlanmadı...',
	'autocreatewiki-step1' => 'Görsel dizini oluşturuluyor ...',
	'autocreatewiki-step2' => 'Veri tabanı oluşturuluyor...',
	'autocreatewiki-congratulation' => 'Tebrikler!',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Ajdar
 */
$messages['tt-cyrl'] = array(
	'autocreatewiki' => 'Яңа вики ясау',
	'autocreatewiki-desc' => 'Катнашучылар соравы буенча Вики-фабрикада вики ясау',
	'autocreatewiki-page-title-default' => 'Яңа вики ясау',
	'autocreatewiki-page-title-answers' => 'Яңа җаваплар сайты ясау',
	'createwiki' => 'Яңа вики ясау',
	'autocreatewiki-chooseone' => 'Исемлектән сайлау',
	'autocreatewiki-required' => '$1 - мәҗбүри',
	'autocreatewiki-web-address' => 'Веб-адрес:',
	'autocreatewiki-category-select' => 'Сайлагыз',
	'autocreatewiki-language-top' => '$1 иң күп кулланылган телләр',
	'autocreatewiki-language-all' => 'Барлык телләр',
	'autocreatewiki-birthdate' => 'Туган көн:',
	'autocreatewiki-blurry-word' => 'Ярымсөртелгән сүз:',
	'autocreatewiki-remember' => 'Мине истә калдыру',
	'autocreatewiki-create-account' => 'Яңа кулланучы теркәү',
	'autocreatewiki-done' => 'Эшләнде',
	'autocreatewiki-error' => 'Хата',
	'autocreatewiki-haveaccount-question' => 'Сезнең Викиядә хисап язмасы бармы?',
	'autocreatewiki-success-title-default' => 'Сезнең вики ясалган!',
	'autocreatewiki-success-title-answers' => 'Сезнең җаваплар сайты эшләнгән!',
	'autocreatewiki-success-subtitle' => 'Хәзер сез, менә бу сәхифәгә күчеп, үз викиегездә эшне башлый аласыз:',
	'autocreatewiki-success-has-been-created' => 'ясалган!',
	'autocreatewiki-success-get-started' => 'Эшне башлау',
	'autocreatewiki-info-domain' => 'Эләүдә сезнең тема өчен ачкыч сүз булырдай сүзне куллану яхшырак булыр.',
	'autocreatewiki-info-topic' => 'Кыскача тасвирлама өстәгез, мәсәлән, "Габдулла Тукай" яки "ТВ тапшыруы".',
	'autocreatewiki-info-category-default' => 'Бу кунакларга сезнең викине табарга ярдәм итәчәк.',
	'autocreatewiki-info-category-answers' => 'Бу кунакларга сезнең җаваплар сайтын табарга ярдәм итәчәк.',
	'autocreatewiki-info-language' => 'Сезнең вики кунаклары өчен интерфейс теле',
	'autocreatewiki-info-email-address' => 'Сезнең электрон әрҗәгез, Викиядә беркемгә дә күрсәтелми.',
	'autocreatewiki-info-realname' => 'Әгәр сез аны күрсәтсәгез, ул сезнең эшегезнең авторлыгын атар өчен кулланылачак.',
	'autocreatewiki-info-birthdate' => 'Wikia барлык кулланучылардан да чын туган көннәрен күрсәтүне таләп итә, бу сайтның федераль таләпләргә туры килүен тәэмин итәр өчен кирәк һәм куркынычсызлык чарасы да булып тора.',
	'autocreatewiki-info-blurry-word' => 'Сез бу урында күрә торган ярымсөртелгән сүзләрне, зинһар өчен, язсагыз иде. Бу хисап язмаларының автоматик рәвештә ясалуыннан сакланыр өчен эшләнелә.',
	'autocreatewiki-info-terms-agree' => 'Викине оештырып һәм хисап язмасын төзеп, сез <a href="http://www.wikia.com/wiki/Terms_of_use">Wikia куллану шартлары</a> белән килешәсез.',
	'autocreatewiki-info-staff-username' => '<b>Персонал өчен генә:</b> Әйтелгән кулланучы оештыручы буларак күрсәтелгән.',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-limit-day' => 'Wikia бер көн эчендә ясалырга мөмкин булган викилар санын узды ($1).',
	'autocreatewiki-limit-creation' => 'Сез 24 сәгать эчендә ясарга мөмкин булган викилар санын уздыгыз ($1).',
	'autocreatewiki-empty-field' => 'Зинһар өчен, бу кырны тутырыгыз.',
	'autocreatewiki-bad-name' => 'Исемдә махсус символлар (мәсәлән, @ яки $) була алмый, һәм аны юл хәрефләре белән буш арасыз язылган бер сүз белән күрсәтергә кирәк',
	'autocreatewiki-invalid-wikiname' => 'Исемдә махсус символлар (мәсәлән, $ яки #) була алмый һәм буш килеш калырга тиеш түгел.',
	'autocreatewiki-violate-policy' => 'Бу вики исемендә исем кушу кагыйдәләрен бозучы сүзләр бар',
	'autocreatewiki-name-taken' => 'Мондый URL белән бер вики бар инде. Сез <a href="http://$1.wikia.com">http://$1.wikia.com</a>  проектына кушыла яки башка адрес сайлый аласыз.',
	'autocreatewiki-name-too-short' => 'Бу исем артык кыска. Зинһар өчен, кимендә 3 символдан торган исем сайлагыз',
	'autocreatewiki-name-too-long' => 'Бу исем артык озын. Зинһар өчен, 50 символдан артмаган исем сайлагыз.',
	'autocreatewiki-similar-wikis' => 'Түбәндә бу темага кагылган һәм инде эшләп килүче викилар китерелгән. Без аларның берсендә катнашырга тәкъдим итәбез.',
	'autocreatewiki-invalid-username' => 'Тыелган кулланучы исеме.',
	'autocreatewiki-busy-username' => 'Бу кулланучы исеме кулланыла инде.',
	'autocreatewiki-blocked-username' => 'Сезгә хисап язмасы төземәсәгез дә була.',
	'autocreatewiki-user-notloggedin' => 'Сезнең хисап язмасы төзелгән, ләкин сез системага кермәдегез!',
	'autocreatewiki-empty-language' => 'Зинһар өчен, викиегез өчен тел сайлагыз.',
	'autocreatewiki-empty-category' => 'Зинһар өчен, бер төркемне сайлагыз.',
	'autocreatewiki-empty-wikiname' => 'Вики исеме буш кала алмый.',
	'autocreatewiki-empty-username' => 'Кулланучы исеме буш кала алмый.',
	'autocreatewiki-empty-password' => 'Серсүз буш кала алмый',
	'autocreatewiki-empty-retype-password' => 'Серсүзне кабатлау буш була алмый.',
	'autocreatewiki-category-label' => 'Төркем:',
	'autocreatewiki-category-other' => 'Башка',
	'autocreatewiki-set-username' => 'Башта кулланучы исемен сайлагыз.',
	'autocreatewiki-invalid-category' => 'Ялгыш төркем.
Зинһар өчен, чыгучы исемлектән мөмкин булган вариантны сайлагыз.',
	'autocreatewiki-invalid-language' => 'Ялгыш, мөмкин булмаган тел.
Зинһар өчен, килеп чыгучы исемлектән мөмкин булган вариантны сайлагыз.',
	'autocreatewiki-invalid-retype-passwd' => 'Зинһар өчен, шул ук серсүзне яңадан языгыз',
	'autocreatewiki-invalid-birthday' => 'Хаталы туган көн.',
	'autocreatewiki-limit-birthday' => 'Теркәлүне үткәреп булмый.',
	'autocreatewiki-log-title' => 'Сезнең вики ясала',
	'autocreatewiki-step0' => 'Инициализация...',
	'autocreatewiki-stepdefault' => 'Эш бара, зинһар, көтегез...',
	'autocreatewiki-errordefault' => 'Процесс тукталмады...',
	'autocreatewiki-step1' => 'Сурәтләр директориясен эшләү . . .',
	'autocreatewiki-step2' => 'Мәгълүматлар базасын оештыру ...',
	'autocreatewiki-step3' => 'Мәгълүматлар җыелмасында куелган мәгълүматны урнаштыру...',
	'autocreatewiki-step4' => 'Куелган сурәтләрне һәм логотипны күчереп алу . . .',
	'autocreatewiki-step5' => 'Мәгълүматлар җыелмасында стандарт үзгәрешлеләрне урнаштыру...',
	'autocreatewiki-step6' => 'Мәгълүматлар җыелмасында стандарт җәдвәлләрне урнаштыру...',
	'autocreatewiki-step7' => 'Башлангыч телне урнаштыру...',
	'autocreatewiki-step8' => 'Катнашучылар төркемнәрен һәм төркемнәрне көйләү...',
	'autocreatewiki-step9' => 'Яңа вики өчен үзгәрелешлеләрне урнаштыру...',
	'autocreatewiki-step10' => 'Үзәк викидагы битләрне көйләү...',
	'autocreatewiki-step11' => 'Катнашучының электрон почтасына хат җибәрү...',
	'autocreatewiki-redirect' => 'Яңа викига юнәлтү: $1',
	'autocreatewiki-congratulation' => 'Котлыйбыз!',
	'autocreatewiki-welcometalk-log' => 'Сәламләү хаты',
	'autocreatewiki-regex-error-comment' => '$1 викисында кулланылган (тулы текст:$2)',
	'autocreatewiki-step2-error' => 'Мәгълүматлар җыелмасы юк!',
	'autocreatewiki-step3-error' => 'Мәгълүматлар җыелмасында алдан куелган белешмәләрне урнаштырып булмый!',
	'autocreatewiki-step6-error' => 'Мәгълүматлар җыелмасында җәдвәлләрне урнаштыру мөмкин түгел!',
	'autocreatewiki-step7-error' => 'Тел өчен башлангыч мәгълүматлар базасын күчермәләү мөмкин түгел!',
	'autocreatewiki-protect-reason' => 'Рәсми интерфейсның бер өлеше',
	'autocreatewiki-welcomesubject' => '$1 уңышлы ясалды!',
	'autocreatewiki-welcomebody' => 'Исәнмесез,$2.

Сезнең вики төзелде! Күз салыгыз: <$1>

Башларга әзерсезме? Без сезнең фикер алышу сәхифәсенә (<$5>) берничә сылтама өстәдек, алар сезгә эшне башларга ярдәм итәрләр һәм Викиянең күп санлы файдалы өлкәләрен күрсәтерләр. Әгәр дә сезнең нинди дә булса сорауларыгыз була икән, яки үзегезне югалып калгандай хис итәсез икән, бу хатка җавап языгыз яисә безнең Белешмәлек <http://help.wikia.com> белән танышыгыз. 

Шулай ук  сез, файдалы киңәшләр, Викиянең яңа мөмкинлекләре һәм яңа кушымталар турында мәгълүмат табар өчен,  Үзәк Викидә идарәчеләр өчен блогны <http://community.wikia.com/wiki/Blog%3AWikia_Founders_%26_Admins> яки Викия хезмәткәрләре блогын  <http://community.wikia.com/wiki/Blog:Wikia_Staff_Blog>  карый аласыз. 

Хәерле сәгатьтә!

$3
Викия җәмгыяте
<http://community.wikia.com/wiki/User:$4>


___________________________________________
* Бездән хатларның азрак килүен телисезме? Сез шәхси көйләнмәләр битендә (http://community.wikia.com/Special:Preferences ) таратылмага  язылуны туктата яки үзгәртә аласыз.',
	'autocreatewiki-welcometalk' => "== Рәхим итегез! ==
<div style=\"font-size:120%; line-height:1.2em;\">Исәнмесез, \$1 — Без '''\$4''' Wikia җәмгыятенең бер өлеше булуына шатбыз! 

Хәзер сезнең яраткан темагызга  мәгълүмат, фотографияләр һәм видео өстәү өчен тулы бер сайт бар. Ләкин хәзер сезгә буш битләр карап торалар... Куркыныч, әйеме? Менә эшне башлау өчен кайбер ысуллар. 

* '''Беренче биттә темагызны күрсәтегез'''. Бу сезнең укучыларыгызга темагызның ни хакында булуын аңлатыр өчен мөмкинлек. Күпме телисез – шулкадәр языгыз! Сезнең тасвирламагыз сезнең сайттагы барлык мөһим битләрне бәйли ала.

* '''Яңа битләр башлагыз'''. Башлау өчен бер-ике җөмлә дә җитә. Буш битләр эшләмәгез! Викиның мәгънәсе сезнең алга таба хәрәкәтегез дәвамында мәкаләләр өстәү һәм тулыландырудан гыйбарәт. Шулай ук, сез фото һәм видео өсти аласыз, бу мәкаләне кызыклырак һәм тулырак итәчәк.

Ә аннары барыгыз гына! Кешеләр уку һәм карау өчен күп материал булган викиларга керергә ярата, шуңа күрә материал өстәүне дәвам итегез һәм сезгә укучылар һәм төзәтүчеләр тартылыр. Күп нәрсә эшлисе булыр, тик курыкмагыз – бүген беренче генә көн, ә сезнең вакыт күп. Һәр вики нәкъ шулай башлана – әкренләп, башта берничә бит, соңрак кына зур, тере сайт була.

Әгәр сорауларыгыз була икән, сез [[Special:Contact|элемтәгә]] чыга аласыз. Уңышлар!

— [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Яңа викилар',
	'autocreatewiki-reminder-subject' => '{{SITENAME}}',
	'autocreatewiki-subname-answers' => 'Җаваплар',
);

/** Ukrainian (українська)
 * @author A1
 * @author AS
 * @author Ahonc
 * @author NickK
 * @author Prima klasy4na
 * @author Vox
 * @author Тест
 */
$messages['uk'] = array(
	'autocreatewiki' => 'Створити нову Вікі',
	'autocreatewiki-desc' => 'Створити вікі у WikiFactory з запитів користувачів',
	'autocreatewiki-page-title-default' => 'Створити нову Вікі',
	'createwiki' => 'Створити нову Вікі',
	'autocreatewiki-chooseone' => 'Виберіть зі списку',
	'autocreatewiki-required' => "$1 = обов'язково",
	'autocreatewiki-web-address' => 'Веб-адреса:',
	'autocreatewiki-category-select' => 'Виберіть одну',
	'autocreatewiki-language-top' => '$1 {{PLURAL:$1|найважливіша мова|найважливіші мови|найважливіших мов}}',
	'autocreatewiki-language-all' => 'Всі мови',
	'autocreatewiki-birthdate' => 'Дата народження:',
	'autocreatewiki-blurry-word' => 'Розмите слово:',
	'autocreatewiki-remember' => "Запам'ятати мене",
	'autocreatewiki-create-account' => 'Створити обліковий запис',
	'autocreatewiki-done' => 'готово',
	'autocreatewiki-error' => 'помилка',
	'autocreatewiki-haveaccount-question' => 'Ви вже маєте обліковий запис у Вікії?',
	'autocreatewiki-success-title-default' => 'Вашу вікі створено!',
	'autocreatewiki-success-subtitle' => 'Тепер ви можете почати працювати в вашій вікі відвідавши:',
	'autocreatewiki-success-has-been-created' => 'було створено!',
	'autocreatewiki-success-get-started' => 'Початок роботи',
	'autocreatewiki-info-domain' => 'Краще використати слово, що може бути ключовим для вашої теми при пошуку.',
	'autocreatewiki-info-topic' => 'Додайте короткий опис, наприклад, "Зоряні війни" або "ТВ-шоу".',
	'autocreatewiki-info-category-default' => 'Це допоможе відвідувачам знайти вашу вікі.',
	'autocreatewiki-info-language' => 'Ця мова використовуватиметься за замовчанням для відвідувачів вашої вікі.',
	'autocreatewiki-info-email-address' => 'Ваша адреса електронної пошти ніколи не відображається нікому на Wikia.',
	'autocreatewiki-info-birthdate' => 'Вікія зобов’язує всіх користувачів указувати свою справжню дату народження; це є запобіжним засобом, дозволяє забезпечити відповідність сайту вимогам федеральних правил.',
	'autocreatewiki-info-blurry-word' => 'Для захисту від автоматичного створення облікових записів, будь ласка, введіть розмиті слова, що ви бачите, у надане поле.',
	'autocreatewiki-info-terms-agree' => 'Створюючи вікі й обліковий запис користувача, ви погоджуєтеся з <a href="http://www.wikia.com/wiki/Terms_of_use">умовами використання Wikia</a>',
	'autocreatewiki-info-staff-username' => '<b>Лише для персоналу:</b> Вказаний користувач буде зазначений як засновник.',
	'autocreatewiki-title-template' => 'Вікі $1',
	'autocreatewiki-empty-field' => 'Будь ласка, заповніть це поле.',
	'autocreatewiki-bad-name' => 'Назва не може містити спеціальних символів (як, наприклад, $ чи @) і має бути одним словом, написаним малими літерами без пробілів.',
	'autocreatewiki-invalid-wikiname' => 'Назва не може містити спеціальних символів (як, наприклад, $ або @) і не може бути пустою',
	'autocreatewiki-violate-policy' => 'Ця назва вікі містить слова, що порушують наші правила йменування',
	'autocreatewiki-name-taken' => 'Вікі з цією URL адресою вже існує. Ви можете почати редагування в <a href="http://<span class=" notranslate"="">$1.wikia.com">http:// $1 . wikia.com</a> або вибрати іншу адресу.',
	'autocreatewiki-name-too-short' => 'Ця адреса занадто коротка. Будь ласка, оберіть адресу, що містить щонайменше 3 символи.',
	'autocreatewiki-name-too-long' => 'Ця адреса занадто довга. Будь ласка, оберіть адресу, яка має не більше 50 символів.',
	'autocreatewiki-similar-wikis' => 'Нижче наведені вже існуючі вікі з такою тематикою. Ми пропонуємо редагування однієї з них.',
	'autocreatewiki-invalid-username' => 'Неприпустиме ім’я користувача.',
	'autocreatewiki-busy-username' => "Це ім'я користувача вже зайнято.",
	'autocreatewiki-blocked-username' => 'Ви не можете створити обліковий запис.',
	'autocreatewiki-user-notloggedin' => 'Ваш обліковий запис був створений, але ви не ввійшли в систему!',
	'autocreatewiki-empty-language' => 'Будь ласка, виберіть мову для вікі.',
	'autocreatewiki-empty-category' => 'Будь ласка, виберіть категорію.',
	'autocreatewiki-empty-wikiname' => 'Назва вікі не може бути порожньою.',
	'autocreatewiki-empty-username' => "Ім'я користувача не може бути порожнім.",
	'autocreatewiki-empty-password' => 'Пароль не може бути порожнім.',
	'autocreatewiki-empty-retype-password' => 'Підтвердження пароля не може бути порожнім.',
	'autocreatewiki-category-label' => 'Категорія:',
	'autocreatewiki-category-other' => 'Інше',
	'autocreatewiki-set-username' => 'Спочатку оберіть ім’я користувача.',
	'autocreatewiki-invalid-category' => 'Неприпустиме значення категорії.
Будь ласка, виберіть належне з випадаючого списку.',
	'autocreatewiki-invalid-language' => 'Неприпустиме значення мови.
Будь ласка, виберіть належне з випадаючого списку.',
	'autocreatewiki-invalid-retype-passwd' => 'Будь ласка, введіть той самий пароль, що ви ввели вище',
	'autocreatewiki-invalid-birthday' => 'Неправильна дата народження',
	'autocreatewiki-limit-birthday' => 'Неможливо створити реєстрацію.',
	'autocreatewiki-log-title' => 'Ваша вікі створюється!',
	'autocreatewiki-step0' => 'Процес ініціализації…',
	'autocreatewiki-stepdefault' => 'Процес запущено, будь ласка, зачекайте...',
	'autocreatewiki-errordefault' => 'Процес не було завершено...',
	'autocreatewiki-step1' => 'Створення папки зображень...',
	'autocreatewiki-step2' => 'Створення бази даних...',
	'autocreatewiki-step3' => 'Налаштування інформації за замовчуванням в базі даних...',
	'autocreatewiki-step4' => 'Копіювання зображень за замовчанням і логотипу...',
	'autocreatewiki-step5' => 'Налаштування змінних за замовчуванням в базі даних...',
	'autocreatewiki-step6' => 'Налаштування таблиць за замовчанням в базі даних...',
	'autocreatewiki-step7' => 'Налаштування початкової мови...',
	'autocreatewiki-step8' => 'Створення груп користувачів та категорій...',
	'autocreatewiki-step9' => 'Налаштування змінних для нової вікі...',
	'autocreatewiki-step10' => 'Налаштування сторінок на центральній вікі...',
	'autocreatewiki-step11' => 'Надсилання електронної пошти користувачеві...',
	'autocreatewiki-redirect' => 'Перенаправлення на нову вікі: $1...',
	'autocreatewiki-congratulation' => 'Вітаємо!',
	'autocreatewiki-welcometalk-log' => 'Повідомлення привітання',
	'autocreatewiki-regex-error-comment' => 'використано в вікі $1 (весь текст: $2)',
	'autocreatewiki-step2-error' => 'База даних існує!',
	'autocreatewiki-step3-error' => 'Не вдалося налаштувати інформацію за замовчуванням в базі даних!',
	'autocreatewiki-step6-error' => 'Не вдалося налаштувати таблиці за замовчуванням у базі даних!',
	'autocreatewiki-step7-error' => 'Не вдалося скопіювати початкову бази даних для мови!',
	'autocreatewiki-protect-reason' => 'Частина офіційного інтерфейсу',
	'autocreatewiki-welcomesubject' => '$1 було створено!',
	'autocreatewiki-welcomebody' => 'Вітаємо вас, $2.

Вікі з вашого запиту тепер доступна за адресою <$1>. Ми сподіваємося, що ви скоро почнете її редагування.

Ми додали деяку інформацію та поради на вашу сторінку обговорення користувача (<$5>), щоб допомогти вам розпочати роботу.

Якщо у вас виникли якісь проблеми, ви можете звернутися по допомогу до спільноти в вікі на <http: www.wikia.com/wiki/forum:help_desk="">, або за електронною поштою community@wikia.com. Ви можете також відвідати наш IRC чат-канал #wikia <http: irc.wikia.com="">.

Зі мною можна зв’язатися напряму за електронною поштою або на моїй сторінці обговорення, якщо у вас є питання чи зауваження.

Удачі в розвитку проекту!

Команда спільноти Wikia

<http://www.wikia.com/wiki/User:$4>', # Fuzzy
	'autocreatewiki-welcometalk' => "== Ласкаво просимо! ==
<div style=\"font-size:120%; line-height:1.2em;\">Вітаємо, \$1 — ми раді, що '''\$4''' — частина спільноти Wikia!

Тепер вам слід розпочати роботу. Ось деякі поради:

* '''Опишіть свою тему''' на першій сторінці, нехай читачі одразу зрозуміють, що на них очікує! 

* '''Створіть кілька сторінок''' — можна почати з кількох речень, а потім додавати картинки і відео.

А далі просто рухайтесь вперед! Звернутися до розробників можна  [[Special:Contact|тут]]. Успіхів!

— [[User:\$2|\$3]] <staff /></div>",
	'newwikis' => 'Нові вікі',
	'newwikisstart' => 'Показати вікі, починаючи з:',
	'autocreatewiki-reminder-body' => 'Шановний $1:

Вітаємо вас з початком роботи вашої нової вікі, {{SITENAME}}! Ви можете повернутися і додати більше до вашої вікі відвідавши $2.

Це зовсім новий проект тому, будь ласка, напишіть нам, коли у вас виникнуть які-небудь питання!

— Команда спільноти Wikia',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'autocreatewiki' => "Säta uz' wiki",
	'autocreatewiki-page-title-default' => "Säta uz' wiki",
	'createwiki' => "Säta uz' wiki",
	'autocreatewiki-birthdate' => 'Sündunddat:',
	'autocreatewiki-error' => 'petuz',
	'autocreatewiki-success-get-started' => 'Radon augotiž',
	'autocreatewiki-title-template' => '$1 Wiki',
	'autocreatewiki-category-label' => 'Kategorii:',
);

/** Vietnamese (Tiếng Việt)
 * @author Thanhtai2009
 * @author Xiao Qiao
 */
$messages['vi'] = array(
	'autocreatewiki' => 'Tạo wiki mới',
	'autocreatewiki-info-terms-agree' => 'Bằng việc tạo ra một wiki và một tài khoản thành viên, bạn đồng ý với <a href="http://www.wikia.com/wiki/Terms_of_use">Điều khoản Sử dụng của Wikia</a>',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'autocreatewiki-create-account' => 'שאַפֿן אַ קאנטע',
);

/** Chinese (中文)
 */
$messages['zh'] = array(
	'autocreatewiki-page-title-default' => '申请wiki',
	'createwiki' => '申請Wiki',
	'autocreatewiki-info-language' => '的預設語文',
	'autocreatewiki-welcomesubject' => '$1 已建立!',
	'autocreatewiki-welcomebody' => '嗨 $2,

歡迎加入Wikia社群。相信很快能看到你對此站的貢獻。

如果您在使用上有任何問題，可先查閱說明頁面<http://help.wikia.com> (英文)，或是查看中文的[[w:c:zh:Category:中文說明|使用說明]]

祝您使用快

Wikia 社群團隊', # Fuzzy
);

/** Chinese (China) (中文（中国大陆）‎)
 */
$messages['zh-cn'] = array(
	'autocreatewiki-page-title-default' => '申请wiki',
	'createwiki' => '申请wiki',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Dimension
 * @author Hydra
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'autocreatewiki' => '创建一个新的维基',
	'autocreatewiki-desc' => '通过用户的请求，在维基工厂中创建维基',
	'autocreatewiki-page-title-default' => '创建一个新的维基',
	'autocreatewiki-page-title-answers' => '创建一个新的问答网站',
	'createwiki' => '创建一个新的维基',
	'autocreatewiki-chooseone' => '请选择一个',
	'autocreatewiki-required' => '$1 = 必须的',
	'autocreatewiki-web-address' => '网站地址：',
	'autocreatewiki-category-select' => '选择一个',
	'autocreatewiki-language-top' => '顶部$1语言',
	'autocreatewiki-language-all' => '所有语言',
	'autocreatewiki-birthdate' => '出生日期：',
	'autocreatewiki-blurry-word' => '模糊的词：',
	'autocreatewiki-remember' => '记住我',
	'autocreatewiki-create-account' => '创建帐户',
	'autocreatewiki-done' => '完成',
	'autocreatewiki-error' => '错误',
	'autocreatewiki-haveaccount-question' => '您已经有一个 Wikia 帐户吗？',
	'autocreatewiki-success-title-default' => '您维基已创建！',
	'autocreatewiki-success-title-answers' => '您的问答网站已创建！',
	'autocreatewiki-success-subtitle' => '您可以开始在您的新维基开工。请点击：',
	'autocreatewiki-success-has-been-created' => '已创建！',
	'autocreatewiki-success-get-started' => '开始',
	'autocreatewiki-info-domain' => '最好使用一个词可能是你的主题的搜索关键字。',
	'autocreatewiki-info-topic' => '添加简短的描述，如“星球大战”或“电视节目”。',
	'autocreatewiki-info-category-default' => '这将有助于访客找到你的维基。',
	'autocreatewiki-info-category-answers' => '这将有助于访客找到您的问答网站。',
	'autocreatewiki-info-language' => '这将是你的维基访客的默认语言。',
	'autocreatewiki-info-email-address' => '您的电子邮件地址不会显示给Wikia上的任何人。',
	'autocreatewiki-info-realname' => '如果提供这将用于为您提供了归因你的工作。',
	'autocreatewiki-title-template' => '$1 维基',
	'autocreatewiki-violate-policy' => '此维基名中含有违反命名策略的词语',
	'autocreatewiki-name-too-short' => '此地址过短，请选择一个至少包含3个字符的地址。',
	'autocreatewiki-name-too-long' => '此地址过长，请选择一个最多包含50个字符的地址。',
	'autocreatewiki-invalid-username' => '此用户名无效。',
	'autocreatewiki-busy-username' => '已采取此用户名。',
	'autocreatewiki-blocked-username' => '您不能创建帐户。',
	'autocreatewiki-user-notloggedin' => '您的帐户已创建，但未登录！',
	'autocreatewiki-empty-language' => '请选择维基语言。',
	'autocreatewiki-empty-category' => '请选择一个类别。',
	'autocreatewiki-empty-wikiname' => '维基的名称不能为空。',
	'autocreatewiki-empty-username' => '用户名不能为空。',
	'autocreatewiki-empty-password' => '密码不能为空。',
	'autocreatewiki-empty-retype-password' => '重新键入密码不能为空。',
	'autocreatewiki-category-label' => '分类：',
	'autocreatewiki-category-other' => '其他',
	'autocreatewiki-set-username' => '请先设置用户名。',
	'autocreatewiki-invalid-category' => '分类的值无效。
请从下拉列表中适当的选择。',
	'autocreatewiki-invalid-language' => '语言的值无效。
请从下拉列表中适当的选择。',
	'autocreatewiki-invalid-retype-passwd' => '请重新输入上面相同的密码',
	'autocreatewiki-invalid-birthday' => '无效的出生日期',
	'autocreatewiki-limit-birthday' => '无法创建注册。',
	'autocreatewiki-log-title' => '您维基已被创建了',
	'autocreatewiki-step0' => '正在初始化过程...',
	'autocreatewiki-stepdefault' => '进程正在运行，请稍候...',
	'autocreatewiki-errordefault' => '过程还没结束 …',
	'autocreatewiki-step1' => '正在创建的图像文件夹...',
	'autocreatewiki-step2' => '创建数据库...',
	'autocreatewiki-step3' => '在数据库中设置的默认信息...',
	'autocreatewiki-step4' => '正在复制的徽标和默认图像...',
	'autocreatewiki-step5' => '在数据库中设置默认变量...',
	'autocreatewiki-step6' => '在数据库中设置默认表...',
	'autocreatewiki-step7' => '设置语言起动器...',
	'autocreatewiki-step8' => '设置用户组和分类...',
	'autocreatewiki-step9' => '为新维基设置变量...',
	'autocreatewiki-step10' => '中央维基上设置页...',
	'autocreatewiki-step11' => '将电子邮件发送到用户...',
	'autocreatewiki-redirect' => '将重定向到新的维基： $1...',
	'autocreatewiki-congratulation' => '恭喜！',
	'autocreatewiki-welcometalk-log' => '欢迎留言',
	'autocreatewiki-regex-error-comment' => '在维基$1中被使用（全文：$2）',
	'autocreatewiki-step2-error' => '数据库存在！',
	'autocreatewiki-step3-error' => '不能在数据库中设置的默认信息！',
	'autocreatewiki-step6-error' => '不能在数据库中设置默认表！',
	'autocreatewiki-step7-error' => '不能将复制起动器数据库语言！',
	'autocreatewiki-protect-reason' => '官方界面的一部分',
	'autocreatewiki-welcomesubject' => '$1 已创建！',
	'newwikis' => '新的维基',
	'newwikisstart' => '以此页面打开维基：',
	'autocreatewiki-reminder-body' => '亲爱的$1:

恭喜您创建了自己的维基，{{SITENAME}}! 您可以访问$2返回并为您的维基添加更多信息。

这是一个全新的项目，如果您有任何疑问，请给我们致函!


-- Wikia社区小组',
	'autocreatewiki-reminder-body-HTML' => '<p>亲爱的$1:</p>

<p>恭喜您创建了自己的维基，{{SITENAME}}! 您可以访问<a href="$2">$2</a>返回并为您的维基添加更多信息。</p>

<p>这是一个全新的项目，如果您有任何疑问，请给我们致函！</p>


<p>-- Wikia社区小组</p>',
	'autocreatewiki-subname-answers' => '问答网站',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Ffaarr
 * @author Oapbtommy
 */
$messages['zh-hant'] = array(
	'autocreatewiki' => '創建一個新的 wiki',
	'autocreatewiki-desc' => '通過使用者的請求，在 WikiFactory 中創建 wiki',
	'autocreatewiki-page-title-default' => '建立一個新的維基',
	'autocreatewiki-page-title-answers' => '創建一個新的問答網站',
	'createwiki' => '建立一個新的維基',
	'autocreatewiki-chooseone' => '請選擇一個',
	'autocreatewiki-web-address' => '網址',
	'autocreatewiki-category-select' => '選擇一個',
	'autocreatewiki-language-top' => '最常用 $1 種語言',
	'autocreatewiki-language-all' => '所有語言',
	'autocreatewiki-birthdate' => '出生日期：',
	'autocreatewiki-blurry-word' => '模糊的詞：',
	'autocreatewiki-remember' => '記住我：',
	'autocreatewiki-create-account' => '創建帳戶',
	'autocreatewiki-done' => '完成',
	'autocreatewiki-error' => '錯誤',
	'autocreatewiki-haveaccount-question' => '你已經有一個 Wikia 帳戶嗎？',
	'autocreatewiki-success-title-default' => '您的wiki已經創建了',
	'autocreatewiki-success-title-answers' => '您的問答網站已經創建了',
	'autocreatewiki-success-subtitle' => '您現在可以在您的 wiki 上開始工作，請訪問：',
	'autocreatewiki-success-has-been-created' => '已創建 ！',
	'autocreatewiki-success-get-started' => '開始',
	'autocreatewiki-info-domain' => '最好使用一個最可能搜尋到你的主題的關鍵字。',
	'autocreatewiki-info-topic' => '增加一个短的描述，如「星際大戰」或「電視節目」。',
	'autocreatewiki-info-category-default' => '這將有助於訪客找到你的wiki',
	'autocreatewiki-info-category-answers' => '這將有助於你的訪客找到你的問答網站',
	'autocreatewiki-info-language' => '這將是你的 wiki 訪客的預設語言。',
	'autocreatewiki-info-email-address' => '您的電子郵寄地址不會顯示給 Wikia 上的任何人。',
	'autocreatewiki-info-blurry-word' => '為了幫助防止創建自動化的帳戶，請鍵入您在下面的框中看到的這兩個字：',
	'autocreatewiki-info-terms-agree' => '通過創建 wiki 和使用者帳戶，您同意<a href="http://www.wikia.com/wiki/Terms_of_use">Wikia 的使用條款</a>',
	'autocreatewiki-title-template' => '$1Wiki',
	'autocreatewiki-limit-day' => 'Wikia 今天超過了 wiki 創建的最大數量 （ $1 ）。',
	'autocreatewiki-limit-creation' => '您已超出了 在一天內創建wiki 的最大數量 （ $1 ）。',
	'autocreatewiki-empty-field' => '請填寫此欄位。',
	'autocreatewiki-bad-name' => '名稱不能包含特殊字元 （如 $ 或 @），並且必須是一個小寫字母詞沒有空格。',
	'autocreatewiki-invalid-wikiname' => '名稱不能包含特殊字元 （如 $ 或 @） 且不能為空白',
	'autocreatewiki-violate-policy' => '此 wiki 名稱中包含了違反我們的命名政策的詞語',
	'autocreatewiki-name-taken' => '已經有一個使用此網址的 wiki。可以在<a href="http://<span class=" notranslate"="">$1.wikia.com">http:// $1.wikia.com</a>開始編輯，或選擇另一個位址。',
	'autocreatewiki-name-too-short' => '此網址太短，選擇一個具有至少 3 個字元的網址。',
	'autocreatewiki-name-too-long' => '此網址太長，請另選擇一個網址，最多 50 個字元。',
	'autocreatewiki-similar-wikis' => '下面是已經創建的關於這一主題的 wiki。我們建議您參與編輯其中之一。',
	'autocreatewiki-invalid-username' => '此用戶名無效。',
	'autocreatewiki-busy-username' => '此用戶名已被使用。',
	'autocreatewiki-blocked-username' => '您不能創建帳戶。',
	'autocreatewiki-user-notloggedin' => '您的帳戶已創建，但未登錄 ！',
	'autocreatewiki-empty-language' => '請選擇wiki的語言。',
	'autocreatewiki-empty-category' => '請選擇一個分類。',
	'autocreatewiki-empty-wikiname' => 'Wiki 的名稱不能為空白。',
	'autocreatewiki-empty-username' => '使用者名稱不能為空。',
	'autocreatewiki-empty-password' => '密碼不能為空。',
	'autocreatewiki-empty-retype-password' => '重新鍵入密碼不能為空。',
	'autocreatewiki-category-label' => '類別：',
	'autocreatewiki-category-other' => '其他',
	'autocreatewiki-set-username' => '首先設置使用者名稱。',
	'autocreatewiki-invalid-category' => '類別的值無效。
請從下拉列表中選擇適當的類別。',
	'autocreatewiki-invalid-language' => '語言的值無效。
請從下拉列表中選擇適當的語言。',
	'autocreatewiki-invalid-retype-passwd' => '請重新輸入與上面相同的密碼',
	'autocreatewiki-invalid-birthday' => '無效的出生日期',
	'autocreatewiki-limit-birthday' => '無法創建註冊。',
	'autocreatewiki-log-title' => '您的wiki已經創建了',
	'autocreatewiki-step0' => '正在初始化過程...',
	'autocreatewiki-stepdefault' => '進程正在運行，請稍候...',
	'autocreatewiki-errordefault' => '過程還沒結束...',
	'autocreatewiki-step1' => '正在創建的影像文件夾...',
	'autocreatewiki-step2' => '正在創建資料庫...',
	'autocreatewiki-step3' => '在資料庫中設置預設資訊...',
	'autocreatewiki-step4' => '正在複製logo和預設圖像...',
	'autocreatewiki-step5' => '正在資料庫中設置預設變數...',
	'autocreatewiki-step6' => '正在資料庫中設置預設表格...',
	'autocreatewiki-step7' => '設置語言起動器...',
	'autocreatewiki-step8' => '設置使用者群體和類別...',
	'autocreatewiki-step9' => '設置新 wiki 的變數...',
	'autocreatewiki-step10' => '在中央wiki上設置頁面',
	'autocreatewiki-step11' => '將電子郵件發送到使用者...',
	'autocreatewiki-redirect' => '重定向到新的 wiki：  $1  ...',
	'autocreatewiki-congratulation' => '恭喜 ！',
	'autocreatewiki-welcometalk-log' => '歡迎留言',
	'autocreatewiki-regex-error-comment' => '在 wiki 中使用 $1 （整個文本：  $2 ）',
	'autocreatewiki-step2-error' => '資料庫存在 ！',
	'autocreatewiki-step3-error' => '不能在資料庫中設置預設資訊 ！',
	'autocreatewiki-step6-error' => '不能在資料庫中設置預設表格 ！',
	'autocreatewiki-step7-error' => '無法複製語言起動器資料庫 ！',
	'autocreatewiki-protect-reason' => '官方介面的一部分',
	'autocreatewiki-welcomesubject' => '$1已創建 ！',
	'newwikis' => '新的 wiki',
	'newwikisstart' => '顯示從此處開始的wiki:',
	'autocreatewiki-subname-answers' => '問答網站',
);

/** Chinese (Hong Kong) (中文（香港）‎)
 */
$messages['zh-hk'] = array(
	'autocreatewiki-page-title-default' => '申請wiki',
	'createwiki' => '申請wiki',
);

/** Chinese (Singapore) (中文（新加坡）‎)
 */
$messages['zh-sg'] = array(
	'autocreatewiki-page-title-default' => '申请wiki',
	'createwiki' => '申请wiki',
);

/** Chinese (Taiwan) (中文（台灣）‎)
 */
$messages['zh-tw'] = array(
	'autocreatewiki-page-title-default' => '申請wiki',
	'createwiki' => '申請wiki',
);
