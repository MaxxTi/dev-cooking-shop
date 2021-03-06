@extends('layouts.app')

@section('title', $category->name)

@section('content')

<div class="container">

	@include('admin.elems.breadcrumb')

	<div class="row">
		
		<p>В этом разделе можно добавить, переименовать или удалить подкатегории.</p>
		<p>Список подкатегорий:</p>
		
		<table class="col-md-6 table table-bordered">
				
			@foreach($subcategories as $subcategory)
				<tr>
					<td>{{ $subcategory->name }}</td>
					<td><a class="btn btn-default btn-sm" href="{{ route('admin.product.show_subcategory_products', ['subcategory_id' => $subcategory->id]) }}" role="button">продукты</a></td>
					<td><a class="btn btn-default btn-sm" href="{{ route('admin.subcategory.edit_subcategory', ['subcategory_id' => $subcategory->id]) }}" role="button">изменить</a></td>
					<td><a class="btn btn-default btn-sm" href="{{ route('admin.subcategory.delete_subcategory', ['subcategory_id' => $subcategory->id]) }}" role="button">удалить</a></td>
				</tr>
			@endforeach

		</table>		
		

	</div>

	<hr>
	<a class="btn btn-outline-primary" href="{{ route('admin.subcategory.add_subcategory', ['category_id' => $category->id]) }}" role="button">Добавить подкатегорию</a>
	<a class="btn btn-outline-primary" href="{{ route('admin.subcategory.deleted-subcategories', ['category_id' => $category->id]) }}" role="button">Удаленные подкатегории</a>

</div>

@endsection