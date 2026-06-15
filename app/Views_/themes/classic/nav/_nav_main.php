<?php $menuLimit = $generalSettings->menu_limit; ?>
<div class="header-bottombg-white shadow navigation-wrap navigation-shadow bg-white">
   <div class="container">

   
<nav class="navbar navbar-default main-menu megamenu navbar navbar-hover navbar-expand-lg navbar-soft">
   <div class="container" >
      <div class="collapse navbar-collapse">
         <div class="row">
            <div class="nav-main-mid">
            <ul class="nav navbar-nav">



               <?php if ($generalSettings->show_home_link == 1): ?>
               <li class="<?= uri_string() == 'index' || uri_string() == '' || uri_string() == '/' ? 'active' : ''; ?>"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
               <?php endif;
                  $totalItem = 0;
                  $i = 1;
                  if (!empty($baseMenuLinks)):
                  foreach ($baseMenuLinks as $item):
                  if ($item->item_visibility == 1 && $item->item_location == "main" && $item->item_parent_id == '0'):
                  if ($i < $menuLimit):
                  $subLinks = getSubMenuLinks($baseMenuLinks, $item->item_id, $item->item_type);
                  if ($item->item_type == "category"):
                  if (!empty($subLinks)) {
                  echo loadView('nav/_megamenu_multicategory', ['categoryId' => $item->item_id]);
                  } else {
                  echo loadView('nav/_megamenu_singlecategory', ['categoryId' => $item->item_id]);
                  }
                  else:
                  if (!empty($subLinks)): ?>

                  <!--<li class="nav-item dropdown megamenu-fw">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Knowledge Hub<span class="caret"></span></a>
                     <ul class="dropdown-menu animate fade-up" >
                        <li><a class="dropdown-item" href="#"> Latest News </a></li>
                        <li><a class="dropdown-item" href="#"> Knowledge Articles </a></li>
                        <li><a class="dropdown-item" href="#"> Research Paper </a></li>
                        <li><a class="dropdown-item" href="#"> Opinion & insights </a></li>
                        <li><a class="dropdown-item" href="#"> Glossary </a></li>
                     </ul>
                  </li>-->

                  <!--<li class="nav-item dropdown megamenu-fw">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Knowledge Hub<span class="caret"></span></a>
                     <ul class="dropdown-menu animate fade-up" >
                        <li><a class="dropdown-item icon-arrow" href="#"> Latest News </a>
                              <ul class="submenu dropdown-menu  animate fade-up">
                                 <li><a class="dropdown-item" href="#">Knowledge </a></li>
                                 <li><a class="dropdown-item" href="#">Style 2</a></li>
                                 <li><a class="dropdown-item" href="#">Style 3</a></li>

                                 <li><a class="dropdown-item icon-arrow" href="">Submenu item 3 </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                       <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                       <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                    </ul>
                                 </li>
                                 <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                 <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                              </ul>
                           </li>
                     </ul>
                  </li>-->
                  <li class="nav-item dropdown megamenu-fw <?= uri_string() == $item->item_slug ? 'active' : ''; ?>">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?= generateMenuItemURL($item, $baseCategories); ?>"><?= esc($item->item_name); ?><span class="caret"></span></a>
                     <ul class="dropdown-menu animate fade-up">
                        <?php foreach ($subLinks as $subItem):
                           if ($subItem->item_visibility == 1): ?>
                        <li><a role="menuitem" class="dropdown-item" href="<?= generateMenuItemURL($subItem, $baseCategories); ?>"><?= esc($subItem->item_name); ?></a></li>
                        <?php endif;
                           endforeach; ?>
                     </ul>
                  </li>
               <?php else: ?>
               <li class="<?= uri_string() == $item->item_slug ? 'active' : ''; ?>"><a href="<?= generateMenuItemURL($item, $baseCategories); ?>"><?= esc($item->item_name); ?></a></li>
               <?php endif;
                  endif;
                  $i++;
                  endif;
                  $totalItem++;
                  endif;
                  endforeach;
                  endif;
                  if ($totalItem >= $menuLimit): ?>
               <li class="dropdown relative">
                  <a class="dropdown-toggle dropdown-more-icon" data-toggle="dropdown" href="#"><i class="icon-ellipsis-h"></i></a>
                  <ul class="dropdown-menu dropdown-more dropdown-top">
                     <?php $i = 1;
                        if (!empty($baseMenuLinks)):
                        foreach ($baseMenuLinks as $item):
                        if ($item->item_visibility == 1 && $item->item_location == "main" && $item->item_parent_id == "0"):
                        if ($i >= $menuLimit):
                        $subLinks = getSubMenuLinks($baseMenuLinks, $item->item_id, $item->item_type);
                        if (!empty($subLinks)): ?>
                     <li class="dropdown-more-item">
                        <a class="dropdown-toggle disabled" data-toggle="dropdown" href="<?= generateMenuItemURL($item, $baseCategories); ?>"><?= esc($item->item_name); ?> <span class="icon-arrow-right"></span></a>
                        <ul class="dropdown-menu dropdown-sub">
                           <?php foreach ($subLinks as $subItem):
                              if ($subItem->item_visibility == 1): ?>
                           <li><a role="menuitem" href="<?= generateMenuItemURL($subItem, $baseCategories); ?>"><?= esc($subItem->item_name); ?></a></li>
                           <?php endif;
                              endforeach; ?>
                        </ul>
                     </li>
                     <?php else: ?>
                     <li><a href="<?= generateMenuItemURL($item, $baseCategories); ?>"><?= esc($item->item_name); ?></a></li>
                     <?php endif;
                        endif;
                        $i++;
                        endif;
                        endforeach;
                        endif; ?>
                  </ul>
               </li>
               <?php endif; ?>
            </ul> 
            <ul class="nav navbar-nav navbar-right">

               <?php if (checkUserPermission('add_post')): ?>
                  <li><a href="#" data-toggle="modal" data-target="#modal_add_post" class="btn user-add-btn"><?= trans("add_post"); ?></a></li>
                  <?php endif;
                     if (authCheck()): ?>
                  <li class="dropdown profile-dropdown r-btn">
                     <a class="dropdown-toggle a-profile btn user-add-btn" data-toggle="dropdown" href="#">
                     <img src="<?= getUserAvatar(user()->avatar); ?>" alt="<?= esc(user()->username); ?>" width="16px">
                     <?= esc(user()->username); ?>
                     <span class="icon-arrow-down"></span>
                     </a>
                     <ul class="dropdown-menu">
                        <?php if (checkUserPermission('admin_panel')): ?>
                        <li><a href="<?= adminUrl(); ?>"><i class="icon-dashboard"></i><?= user()->role == "admin" || user()->role == "moderator" ? trans("admin_panel") : trans("dashboard"); ?></a></li>
                        <?php endif; ?>
                        <li><a href="<?= generateProfileURL(user()->slug); ?>"><i class="icon-user"></i><?= trans("profile"); ?></a></li>
                        <?php if (user()->reward_system_enabled == 1): ?>
                        <li><a href="<?= generateURL('earnings'); ?>"><i class="icon-coin-bag"></i><?= trans("earnings"); ?>(<strong class="lbl-earnings"><?= priceFormatted(user()->balance); ?></strong>)</a></li>
                        <?php endif; ?>
                        <li><a href="<?= generateURL('reading_list'); ?>"><i class="icon-star-o"></i><?= trans("reading_list"); ?></a></li>
                        <li><a href="<?= generateURL('settings'); ?>"><i class="icon-settings"></i><?= trans("settings"); ?></a></li>
                        <li><a href="<?= generateURL('logout'); ?>" class="logout"><i class="icon-logout-thin"></i><?= trans("logout"); ?></a></li>
                     </ul>
                  </li>
                  <?php else:
                     if ($generalSettings->registration_system == 1): ?>
                  <li class="top-li-auth header-btn"><a href="#" data-toggle="modal" data-target="#modalLogin" class="btn_open_login_modal btn btn-outline-dark"><i class="fa-solid fa-arrow-right-to-bracket me-2"></i><?= trans("login"); ?></a><span></span><a class="btn btn-outline-dark r-btn" href="<?= generateURL('register'); ?>"><i class="fa-regular fa-user me-2"></i><?= trans("register"); ?></a></li>
                  <?php endif; ?>
                  <?php endif; ?>
                  <?php if ($generalSettings->multilingual_system == 1 && countItems($activeLanguages) > 1): ?>
                  <li class="dropdown ">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                     <i class="icon-language"></i>&nbsp;
                     <?= esc($activeLang->name); ?>
                     <i class="icon-arrow-down"></i>
                     </a>
                     <ul class="dropdown-menu lang-dropdown">
                        <?php foreach ($activeLanguages as $language):
                           $langURL = base_url($language->short_form);
                           if ($language->id == $generalSettings->site_lang):
                           $langURL = base_url();
                           endif; ?>
                        <li><a href="<?= $langURL; ?>" class="<?= $language->id == $activeLang->id ? 'selected' : ''; ?>"><?= $language->name; ?></a></li>
                        <?php endforeach; ?>
                     </ul>
                  </li>
                  <?php endif; ?> 

               <li class="li-search header-btn">
                  <a class="search-icon btn btn-outline-dark"><i class="fa-solid fa-magnifying-glass"></i></a>
                  <div class="search-form">
                     <form action="<?= generateURL('search'); ?>" method="get" id="search_validate">
                        <input type="text" name="q" maxlength="300" pattern=".*\S+.*" class="form-control form-input" placeholder="<?= trans("placeholder_search"); ?>" <?= $rtl == true ? 'dir="rtl"' : ''; ?> required>
                        <button class="btn btn-default"><i class="icon-search"></i></button>
                     </form>
                  </div>
               </li>
            </ul>
         </div>
         </div>
      </div>
   </div>
</nav>
</div>
</div>