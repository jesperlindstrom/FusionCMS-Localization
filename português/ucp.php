<?php

/**
 * Note to module developers:
 * 	Keeping a module specific language file like this
 *	in this external folder is not a good practise for
 *	portability - I do not advice you to do this for
 *	your own modules since they are non-default.
 *	Instead, simply put your language files in
 *	application/modules/yourModule/language/
 *	You do not need to change any code, the system
 *	will automatically look in that folder too.
 */

// UCP
$lang['user_panel'] = "Painel do usuário";
$lang['change_avatar'] = "Alterar avatar";
$lang['nickname'] = "Nickname";
$lang['location'] = "Localização";
$lang['expansion'] = "Expansão";
$lang['account_rank'] = "Rank da conta";
$lang['voting_points'] = "VP";
$lang['donation_points'] = "DP";
$lang['account_status'] = "Status da conta";
$lang['member_since'] = "Membro desde";

// Avatar
$lang['change_avatar'] = "Alterar avatar";
$lang['make_use'] = "Nós fazemos uso do";
$lang['provides_way'] = "que concede um método fácil de manter avatares por toda a web";
$lang['to_change'] = "Para alterar seu avatar você precisa";
$lang['sign_up_for'] = "Registrar-se como";
$lang['or'] = "ou";
$lang['log_into'] = "logar-se";
$lang['using_email'] = "usando o seguinte email:";

// Settings
$lang['settings'] = "Configurações da conta";

$lang['nickname_error'] = "Nickname deve ter entre 4 e 14 caracteres";
$lang['location_error'] = "Localização deve ter menos de 32 caracteres";
$lang['pw_doesnt_match'] = "Senhas não coincidem";
$lang['changes_saved'] = "As mudanças foram salvas!";
$lang['invalid_pw'] = "Senha incorreta!";
$lang['nickname_taken'] = "Nickname já está em uso";
$lang['invalid_language'] = "Linguagem inválida";

// Change expansion
$lang['change_expansion'] = "Alterar expansão";
$lang['expansion_changed'] = "Sua expansão foi alterada.";
$lang['back_to_ucp'] = "Clique aqui para voltar ao painel do usuário!";
$lang['invalid_expansion'] = "A expansão que você selecionou não existe!";
$lang['expansion'] = "Expansão";
$lang['none'] = "Nenhuma";

/**
 * Only translate these if World of Warcraft does it themselves,
 * otherwise you'll confuse people who expect to see them in English
 */
$lang['tbc'] = "The Burning Crusade";
$lang['wotlk'] = "Wrath of The Lich King";
$lang['cataclysm'] = "Cataclysm";
$lang['mop'] = "Mists of Pandaria";