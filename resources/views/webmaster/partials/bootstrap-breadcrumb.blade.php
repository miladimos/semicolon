<nav>
    <ol class="breadcrumb">
      @section('breadcrumb')
      <li class="breadcrumb-item"><a href="/">خانه</a></li>
      @show
    </ol>
</nav>

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="/">دوره ها</a></li>
@endsection
