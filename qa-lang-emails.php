<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-emails.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Jibu lako kwa ^site_title limepata maoni mapya toka kwa ^c_handle:\n\n^fungua^c_content^funga\n\nJibu lako lilikuwa:\n\n^fungua^c_context^funga\n\nWaweza kujibu kwa kuongezea maoni yako:\n\n^url\n\nShukrani,\n\n^site_title",
		'a_commented_subject' => 'Jibu lako ^site_title limepata maoni mapya',

		'a_followed_body' => "Jibu lako kwa ^site_title limepata swali jipya linalohusiana nalo ^q_handle:\n\n^fungua^q_title^funga\n\nJibu lako lilikuwa\n\n^fungua^a_content^funga\n\nBofya hapa chini kujibu swali hilo:\n\n^url\n\nAkhsante,\n\n^site_title",
		'a_followed_subject' => 'Jibu lako ^site_title limepata swali jipya',

		'a_selected_body' => "Hongera! Jibu lako kwa ^site_title limechaguliwa kuwa jibu bora na ^s_handle:\n\n^fungua^a_content^funga\n\nSwali lilikuwa:\n\n^fungua^q_title^funga\n\nBofya hapa chini kuona jibu hilo:\n\n^url\n\nAkhsante,\n\n^site_title",
		'a_selected_subject' => 'Jibu lako ^site_title limechaguliwa!',

		'c_commented_body' => "Maoni mapya toka kwa ^c_handle yameongzewa baada ya maoni yako kwa ^site_title:\n\n^fungua^c_content^funga\n\nMahojiano ni kama yafuatavyo:\n\n^fungua^c_context^funga\n\nWaweza kujibu kwa kuongeza maoni mapya:\n\n^url\n\nAkhsante,\n\n^site_title",
		'c_commented_subject' => 'Maoni yako ^site_title yameongezwa kwa',

		'confirm_body' => "Tafadhali, bofya hapa chini ili kuthibitisha anuani ya barua-pepe yako ^site_title.\n\n^url\n\nAkhsante,\n^site_title",
		'confirm_subject' => '^site_title - Anuani ya barua pepe, imethibitishwa',

		'feedback_body' => "Maoni:\n^message\n\nJina:\n^name\n\nBarua-pepe:\n^email\n\nUkurasa wa nyuma:\n^previous\n\nMtumiaji:\n^url\n\nAnuani ya IP:\n^ip\n\nKivinjari:\n^browser",
		'feedback_subject' => '^ Mrejesho',

		'flagged_body' => "A post by ^p_handle has received ^flags:\n\n^open^p_context^close\n\nClick below to see the post:\n\n^url\n\n\nClick below to review all flagged posts:\n\n^a_url\n\n\nThank you,\n\n^site_title",
		'flagged_subject' => '^site_title has a flagged post',

		'moderate_body' => "Chapisho la ^p_handle linahitaji uthibitihso:\n\n^open^p_context^close\n\nBofya hapa chini kulithibitihsa au kulikataa chapisho:\n\n^url\n\n\nBofya hapa chini kuyapitia machapisho yote:\n\n^a_url\n\n\nAkhsante,\n\n^site_title",
		'moderate_subject' => '^site_title uhakiki',

		'new_password_body' => "Nywila yako mpya kwa ^site_title ni hii.\n\nNywila: ^password\n\nInapendekezwa ubadili nywila yako punde tu baada ya kuingia ndani ya akaunti yako.\n\nAkhsante,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Nywila yako Mpya',

		'private_message_body' => "Umetumiwa ujumbe binafsi na^f_handle on ^site_title:\n\n^open^message^close\n\n^more Akhsante,\n\n^site_title\n\n\nKuzuia upokeaji wa jumbe binafsi, tembelea akaunti yako:\n^a_url",
		'private_message_info' => "Maelezo zaidi kuhusu ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Bofya hapa chini kumjibu ^f_handle kwa ujumbe binafsi:\n\n^url\n\n",
		'private_message_subject' => 'Ujumbe kutoka kwa ^f_handle on ^site_title',

		'q_answered_body' => "Swali lako kwa ^site_title limejibiwa na ^a_handle:\n\n^open^a_content^close\n\nSwali lako lilikuwa:\n\n^open^q_title^close\n\nEndapo umelipenda jibu hili, waweza kulitangaza kwamba ni jibu bora kuliko yote:\n\n^url\n\nAkhsante,\n\n^site_title",
		'q_answered_subject' => 'Swali lako ^site_title limejibiwa',

		'q_commented_body' => "YSwali lako kwa ^site_title limepata maoni mapya toka kwa ^c_handle:\n\n^open^c_content^close\n\nSwali lako lilikuwa:\n\n^open^c_context^close\n\nWaweza kujibu kwa kuongeza maoni yako mapya:\n\n^url\n\nAkhsante,\n\n^site_title",
		'q_commented_subject' => 'Swali lako ^site_title limepata maoni mapya',

		'q_posted_body' => "Kuna swali jipya limeulizwa na^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nBofya hapa chini kuliona swali hilo:\n\n^url\n\nAkhsante,\n\n^site_title",
		'q_posted_subject' => '^site_title imepata swali jipya',

		'remoderate_body' => "Chapisho lililohaririwa ^p_handle linahitaji uthibitisho wako:\n\n^open^p_context^close\n\nBofywa hapa chini kuthibitisha au lifiche chapisho:\n\n^url\n\n\nBofya hapa chini kupitia machapisho yote yaliyokufikia:\n\n^a_url\n\n\nAkhsante,\n\n^site_title",
		'remoderate_subject' => '^site_title uhakiki',

		'reset_body' => "Tafadhali bofya hapa chini kubadili nywila yako ya ^site_title.\n\n^url\n\nMbadala, ingiza msimbo katika nafasi iliyoachwa wazi.\n\nMsimbo: ^code\n\nKama hukutuma ombi la kubadili nywila, samahani ipuuzie barua-pepe hii.\n\nAkhsante,\n^site_title",
		'reset_subject' => '^site_title - Fanya upya nywila iliyosahaulika',

		'to_handle_prefix' => "^,\n\n",

		'u_registered_body' => "Mtumiaji mpya amesajiliwa kwa jina la ^u_handle.\n\nBofya hapa chini kusoma wasifu wake:\n\n^url\n\nAkshante,\n\n^site_title",
		'u_registered_subject' => '^site_title imepata mtumiaji mpya',
		'u_to_approve_body' => "Mtumiaji mpya amesajiliwa kwa jina la ^u_handle.\n\nBofya hapa chini kumthibitihsa:\n\n^url\n\nBofya hapa chini kuhakiki watumiaji wapya wanaosubiri uthibitihso wako:\n\n^a_url\n\nAkhsante,\n\n^site_title",

		'u_approved_body' => "Waweza kuuona wasifu wa Mtumiaji mpya hapa:\n\n^url\n\nAkhsante,\n\n^site_title",
		'u_approved_subject' => 'Your ^site_title Mtumiaji mpya amethibitishwa',

		'wall_post_body' => "^f_handle amechapisha kwenye ukurasa wako wa ^site_title:\n\n^open^post^close\n\nWaweza kujibu chapisho hilo hapa:\n\n^url\n\nAkhsante,\n\n^site_title",
		'wall_post_subject' => 'Chapisho katika Ukurasa wako ^site_title wall',

		'welcome_body' => "Akhsante kwa kujisajili katika Mtandao wa ^site_title.\n\n^custom^confirmThibitisha taarifa zako za usajili hapa:\n\nJina-tumika: ^handle\nBarua-pepe: ^email\n\nTafadhali hifadhi taarifa hizi mahali salama kwa matumizi ya baadae.\n\nAkhsante,\n\n^site_title\n^url",
		'welcome_confirm' => "Tafadhali bofya hapa chini kuthibitisha barua-pepe yako.\n\n^url\n\n",
		'welcome_subject' => 'Karibu katika Mtandao wa ^site_title!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/