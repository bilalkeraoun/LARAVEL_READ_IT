<div class="sidebar-box">
  <form action="#" class="search-form">
    <div class="form-group">
      <span class="icon icon-search"></span>
      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
    </div>
  </form>
</div>
<div class="sidebar-box ftco-animate">
  <div class="categories">
    <h3>Categories</h3>
    @foreach($categories as $categorie)
        <li>
            <a href="#">    
                {{  $categorie->name }} <span class="ion-ios-arrow-forward"></span>
                [ {{ count($categorie->posts) }} ]            
            </a>
        </li>
    @endforeach
  </div>
</div>




 

   
