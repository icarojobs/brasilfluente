<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<!-- Manager -->
<li class="treeview">
    <a href="#"><i class="fa fa-edit"></i> <span>Gerenciamento</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('lesson') }}"><i class="fa fa-edit"></i> <span>Lições</span></a></li>
        <li><a href="{{ backpack_url('type') }}"><i class="fa fa-edit"></i> <span>Tipos de Lições</span></a></li>
        <li><a href="{{ backpack_url('module') }}"><i class="fa fa-edit"></i> <span>Módulos</span></a></li>
        <li><a href="{{ backpack_url('modulelesson') }}"><i class="fa fa-edit"></i> <span>Módulos das Lições</span></a></li>
        <li><a href="{{ backpack_url('city') }}"><i class="fa fa-edit"></i> <span>Cidades</span></a></li>
        <li><a href="{{ backpack_url('state') }}"><i class="fa fa-edit"></i> <span>Estados</span></a></li>
    </ul>
</li>

<!-- Statistics -->
<li class="treeview">
    <a href="#"><i class="fa fa-dashboard"></i> <span>Estatísticas</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('lessonstatistic') }}"><i class="fa fa-dashboard"></i> <span>Estatísticas - Lições</span></a></li>
        <li><a href="{{ backpack_url('modulestatistic') }}"><i class="fa fa-dashboard"></i> <span>Estatísticas - Módulos</span></a></li>
        <li><a href="{{ backpack_url('vocabularystatistics') }}"><i class="fa fa-dashboard"></i> <span>Estatísticas - Vocabulários</span></a></li>
    </ul>
</li>


<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>Gestão de Arquivos</span></a></li>


<!-- Users, Roles Permissions -->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Usuários e Permissões</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Usuários</span></a></li>
        <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Regras</span></a></li>
        <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissões</span></a></li>
    </ul>
</li>

<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}'><i class='fa fa-hdd-o'></i> <span>Backups</span></a></li>
<li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Configurações</span></a></li>