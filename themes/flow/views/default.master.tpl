<!DOCTYPE html>
<html>
<head>
  {asset name="Head"}
</head>
<body id="{$BodyID}" class="{$BodyClass}">
   <div id="Frame">
      <div class="Head" id="Head">
         <div class="Row">
           <div id="header-container">
             <strong class="SiteTitle"><a href="{link path="/"}"><img src="{link path="/"}themes/flow/design/flow-logo.png" alt="Logo">{logo}</a></strong>
           </div>
            <span>A place to discuss all things bees including Flow™ Hive, pests and disease, <br /> learning beekeeping, honey harvesting and much much more.</span>
            <div class="SiteSearch">{searchbox}</div>
            <!--
            <ul class="SiteMenu">
               
 {dashboard_link} 
               {discussions_link}
               {activity_link}
               {inbox_link}
               {custom_menu}
              {profile_link}
               {signinout_link}  

            </ul>
            -->
         </div>
      </div>
      <div id="Body">
         <div class="Row">
            <div class="Column PanelColumn" id="Panel">
               {module name="MeModule"}
               {asset name="Panel"}
            </div>
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
         </div>
      </div>
      <div id="Foot">
         <div class="Row">
            <span class="copyright">&copy; Copyright 2015 Bee inventive Pty Ltd. <a href="http://www.honeyflow.com/extras/privacy-policy/p/8">Privacy Policy</a>. <a href="http://www.honeyflow.com/forms/enewsletter-unsubscribe/p/18">Unsubscribe from mailing list</a>. Website by Evolved Websites.</span>
            {asset name="Foot"}
         </div>
      </div>
   </div>
   {event name="AfterBody"}
</body>
</html>