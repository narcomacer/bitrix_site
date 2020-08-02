<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Forum");
?><?$APPLICATION->IncludeComponent(
	"bitrix:forum",
	".default",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TIME_USER_STAT" => "60",
		"CACHE_TYPE" => "A",
		"CHECK_CORRECT_PATH_TEMPLATES" => "Y",
		"DATE_FORMAT" => "d.m.Y",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"DISPLAY_PANEL" => "N",
		"FID" => array(0),
		"FILES_COUNT" => "5",
		"FORUMS_PER_PAGE" => "15",
		"HELP_CONTENT" => "",
		"IMAGE_SIZE" => "500",
		"MESSAGES_PER_PAGE" => "3",
		"PAGE_NAVIGATION_TEMPLATE" => "forum",
		"PAGE_NAVIGATION_WINDOW" => "5",
		"PATH_TO_AUTH_FORM" => "",
		"RSS_CACHE" => "1800",
		"RSS_COUNT" => "30",
		"RSS_TN_DESCRIPTION" => "",
		"RSS_TN_TITLE" => "",
		"RSS_TYPE_RANGE" => array("RSS2"),
		"RULES_CONTENT" => "",
		"SEF_FOLDER" => "/forum/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("index"=>"index.php","list"=>"forum#FID#/","read"=>"forum#FID#/topic#TID#/","message"=>"messages/forum#FID#/topic#TID#/message#MID#/","help"=>"help/","rules"=>"rules/","message_appr"=>"messages/approve/forum#FID#/topic#TID#/","message_move"=>"messages/move/forum#FID#/topic#TID#/message#MID#/","pm_list"=>"pm/folder#FID#/","pm_edit"=>"pm/folder#FID#/message#MID#/user#UID#/#mode#/","pm_read"=>"pm/folder#FID#/message#MID#/","pm_search"=>"pm/search/","pm_folder"=>"pm/folders/","rss"=>"rss/#TYPE#/#MODE#/#IID#/","search"=>"search/","subscr_list"=>"subscribe/","active"=>"topic/new/","topic_move"=>"topic/move/forum#FID#/topic#TID#/","topic_new"=>"topic/add/forum#FID#/","topic_search"=>"topic/search/","user_list"=>"users/","profile"=>"user/#UID#/edit/","profile_view"=>"user/#UID#/","user_post"=>"user/#UID#/post/#mode#/","message_send"=>"user/#UID#/send/#TYPE#/",),
		"SEND_ICQ" => "A",
		"SEND_MAIL" => "E",
		"SEO_USER" => "N",
		"SET_NAVIGATION" => "Y",
		"SET_PAGE_PROPERTY" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_AUTHOR_COLUMN" => "N",
		"SHOW_AUTH_FORM" => "Y",
		"SHOW_FIRST_POST" => "N",
		"SHOW_FORUMS" => "Y",
		"SHOW_FORUM_ANOTHER_SITE" => "Y",
		"SHOW_LEGEND" => "Y",
		"SHOW_NAME_LINK" => "Y",
		"SHOW_NAVIGATION" => "Y",
		"SHOW_STATISTIC_BLOCK" => array(0=>"STATISTIC",1=>"BIRTHDAY",2=>"USERS_ONLINE"),
		"SHOW_SUBSCRIBE_LINK" => "N",
		"SHOW_TAGS" => "Y",
		"SHOW_VOTE" => "N",
		"SMILES_COUNT" => "100",
		"THEME" => "blue",
		"TIME_INTERVAL_FOR_USER_STAT" => "10",
		"TMPLT_SHOW_ADDITIONAL_MARKER" => "",
		"TOPICS_PER_PAGE" => "10",
		"USER_PROPERTY" => array(),
		"USE_LIGHT_VIEW" => "Y",
		"USE_RSS" => "Y",
		"VOTE_CHANNEL_ID" => "0",
		"VOTE_COUNT_ANSWERS" => "20",
		"VOTE_COUNT_QUESTIONS" => "10",
		"VOTE_GROUP_ID" => array(0),
		"VOTE_TEMPLATE" => "light",
		"WORD_LENGTH" => "50",
		"WORD_WRAP_CUT" => "23"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>