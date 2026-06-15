 <div class="bradecome-wrap">
        <div class="container">
        <?php if ($page->breadcrumb_active == 1): ?>
                <div class=" page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                        <li class="breadcrumb-item active"><?= esc($page->title); ?></li>
                    </ol>
                </div>
            <?php else: ?>
                <div class=" page-breadcrumb"></div>
            <?php endif; ?>
            </div>
    </div>
<style>
  #team{
    width:100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 40px 0;
}
.auth .heading{
    text-align: center;
    margin: 20px;
    font-size: 38px;
    font-weight: 700;
    color: #0f172a;
}
.auth .box{
    width:266px;
    height: 340px;
    background-color: #ffffff;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    position: relative;
}
.auth .container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    max-width: 1346px;
    width: 100%;
}
.auth .top-bar{
    width:50%;
    height: 4px;
    position: absolute;
    left: 50%;
    top: 0px;
    transform: translateX(-50%);
    background-color: #2B466A;
    border-radius: 0px 0px 10px 10px;
}
.auth .verify{
    color:#17b667;
}
.auth .nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.auth .details{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.auth .details img{
    width:100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    object-fit: cover;
    object-position: center;
}
.auth .details strong{
       font-size: 17px;
       font-weight: 700;
    color: #141414;
    letter-spacing: 1px;
    margin-top: 26px;
    text-align: center;
}
.auth .btn{
    width:100%;
   text-align: center;
    background-color: #2B466A;
     font-size: 15px;
     box-shadow: 2px 5px 15px rgba(80,123,252,0.5);
}
.auth .btn a {
   color: #fff;
}
.auth .btn a i{
    margin-right: 10px;
}

.auth .btn:hover {
    color: #fff !important;
    background-color: #2B466A !important;
}
.auth .box:hover{
    box-shadow: 2px 2px 30px rgba(4,15,49,0.1);
    transform: scale(1.01);
    transition: all ease 0.1s;
}

@media(max-width:712px){
   .auth .box{
        flex-grow: 0.7;
    }
.about-premium h2 {
    font-size: 27px;
    font-weight: 700;
}
.auth .box {
    width: 130px;
    height: 229px;
    background-color: #ffffff;
    box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 14px;
    border-radius: 10px;
    margin: 9px;
    position: relative;
}
.auth .details img {
    width: 82px;
    height: 82px;
}
    .btn {
        padding: 6px 0.3rem !important;
            font-size: 9px !important;
    }
    .auth .btn a i {
    margin-right: 5px;
}
}

.pagination-wrap {
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 50px 0;
}

.pagination {
    display: flex;
    list-style: none;
    gap: 6px;
    padding: 0;
    margin: 0;
    flex-wrap: wrap;
}

.pagination li a {
    display: block;
    min-width: 40px;
    text-align: center;
    border-radius: 8px;
    background: #f1f1f1;
    color: #000;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.25s ease;
}

.pagination li a:hover {
    background: #2B466A;
    color: #fff;
}

.pagination li.active a {
    background: #2B466A;
    color: #fff;
    font-weight: 600;
}

.pagination li.disabled a {
    background: #e0e0e0;
    color: #999;
    pointer-events: none;
}

/* 🔹 Mobile Responsive */
@media (max-width: 600px) {
    .pagination li a {
        padding: 8px 10px;
        font-size: 13px;
        min-width: 34px;
    }
}


</style>
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
  
<?php if (!empty($authors)): ?>
   <section id="team" class="auth"> 
        <h1 class="heading">Our Authors
            
        </h1>
    <!--container---------------->
    <div class="container">
         <?php foreach ($authors as $author): ?>
        <div class="box">
            <div class="top-bar"></div>
            <div class="nav">
              
            </div>
            <!--img and details---------------->
            <div class="details">
                <img src="<?= !empty($author->avatar)
                            ? site_url($author->avatar)
                            : site_url('assets/img/user.png'); ?>" alt="<?= esc($author->username); ?>" />
                <strong><?= esc($author->username); ?></strong>
            </div>
            <!--view-btns------------------->
            <div class="btn">
                 <a href="<?= site_url('profile/' . $author->slug); ?>"><i class="fas fa-eye"></i>Check This Profile</a>
            </div>
        </div>
          <?php endforeach; ?>
          
          
         
    </div>
   <?php if ($totalPages > 1): ?>
<div class="pagination-wrap">
    <ul class="pagination">

        <!-- Previous -->
        <li class="<?= ($currentPage <= 1) ? 'disabled' : '' ?>">
            <a href="<?= ($currentPage > 1) ? '?page=' . ($currentPage - 1) : 'javascript:void(0)' ?>">
                ‹ Prev
            </a>
        </li>

        <!-- Page Numbers -->
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="<?= ($i == $currentPage) ? 'active' : '' ?>">
                <a href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>

        <!-- Next -->
        <li class="<?= ($currentPage >= $totalPages) ? 'disabled' : '' ?>">
            <a href="<?= ($currentPage < $totalPages) ? '?page=' . ($currentPage + 1) : 'javascript:void(0)' ?>">
                Next ›
            </a>
        </li>

    </ul>
</div>
<?php endif; ?>


    </section>

                                
<?php endif; ?>

