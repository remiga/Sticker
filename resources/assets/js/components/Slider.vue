<template>
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!--&lt;!&ndash; search form (Optional) &ndash;&gt;-->
      <!--<form action="#" method="get" class="sidebar-form">-->
        <!--<div class="input-group">-->
          <!--<input type="text" name="q" class="form-control" placeholder="Search...">-->
          <!--<span class="input-group-btn">-->
              <!--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
              <!--</button>-->
            <!--</span>-->
        <!--</div>-->
      <!--</form>-->
      <!--&lt;!&ndash; /.search form &ndash;&gt;-->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!--<li class="header">Pasirinkite</li>-->
        <!-- Optionally, you can add icons to the links -->
        <router-link tag="li" :to="{ name: 'PatientSticker',query: {'sickness-case-number': '', 'visit-number': '','personal-code':'','patient-first-name':'','patient-surname':'','username':'','user-surname':'','typeofvisit':'stat'}}"><a><i class="fas fa-bed"></i> <span>STACIONARO LIPDUKAI</span></a></router-link>
        <router-link tag="li" :to="{ name: 'PatientStickerEmergency',query: {'sickness-case-number': '', 'visit-number': '','personal-code':'','patient-first-name':'','patient-surname':'','username':'','user-surname':'','typeofvisit':'emer'}}"><a><i class="fas fa-bed"></i> <span>PRIĖMIMO LIPDUKAI</span></a></router-link>
        <!--<li class="treeview">-->
          <!--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>-->
            <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-left pull-right"></i>-->
              <!--</span>-->
          <!--</a>-->
          <!--<ul class="treeview-menu">-->
            <!--<li><a href="#">Link in level 2</a></li>-->
            <!--<li><a href="#">Link in level 2</a></li>-->
          <!--</ul>-->
        <!--</li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
</template>

<script>

export default {
}
</script>
