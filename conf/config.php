<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.9';

// Database
$Configuration['Database']['Name'] = 'honeyflow_forum';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'forum';
$Configuration['Database']['Password'] = 'hYDQbOtCOVMeTYzaPazVbXn';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Twitter'] = TRUE;
$Configuration['EnabledPlugins']['jsconnect'] = TRUE;
$Configuration['EnabledPlugins']['Facebook'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'Flow™ Forum';
$Configuration['Garden']['Cookie']['Salt'] = '7NPUTOUU4L';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '3';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6LdGtgQTAAAAACrdK3fhlaLLlCqTNZq0ODK_f_te';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6LdGtgQTAAAAAI6m66uwV45dA-icKNRDL5jFpKUf';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Honey Flow Forum';
$Configuration['Garden']['Email']['SupportAddress'] = 'jake@honeyflow.com';
$Configuration['Garden']['Email']['UseSmtp'] = FALSE;
$Configuration['Garden']['Email']['SmtpHost'] = 'smtp-relay.gmail.com';
$Configuration['Garden']['Email']['SmtpUser'] = 'jake@honeyflow.com';
$Configuration['Garden']['Email']['SmtpPassword'] = 'wakatahuri1';
$Configuration['Garden']['Email']['SmtpPort'] = '25';
$Configuration['Garden']['Email']['SmtpSecurity'] = 'ssl';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.9';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['InstallationID'] = 'C605-490F27E3-247B8C0C';
$Configuration['Garden']['InstallationSecret'] = '6533af1df6b7a03a49fb21f8bab8383793f3b963';
$Configuration['Garden']['Theme'] = 'pure';
$Configuration['Garden']['HomepageTitle'] = 'Honey Flow™ Forum';
$Configuration['Garden']['Description'] = 'A place to discuss all things bees including Flow™ Hive, pests and disease, learning beekeeping, honey harvesting and much much more.';
$Configuration['Garden']['FavIcon'] = 'favicon_6439bc24f97e5249.ico';
$Configuration['Garden']['Embed']['Allow'] = TRUE;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.9';
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '4';
$Configuration['Vanilla']['Categories']['DoHeadings'] = FALSE;
$Configuration['Vanilla']['Categories']['HideModule'] = FALSE;
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';

// Last edited by jake (220.233.185.169)2015-04-14 00:47:54