@extends('layouts.app')

@section('style')

<style>
	h1{
		font-size: 36pt;
		color: #313131 !important;
	}

	p{
		font-size: 24pt;
		color: #545454 !important;
		padding-bottom: 28px;
	} 

	.button-done{
		height: 64px;
		width: 330px;
		background-color: #5f9be1;
		color: white;
		font-size: 24pt;
		margin-top: 30px;
	}

	.title {
	  font-family: "Montserrat";
	  font-weight: 700;
	  font-style: normal;
	  font-size: 30px;
	  margin: 5px auto;
	  text-align:center;
	}

	input[type="checkbox"]{
	  display: none;
	} 

	input[type="checkbox"] + label{
	  text-align: center;
	}

	input[type="checkbox"]:checked + label{
	  color: #FFF;
	  background-color: #38c4ca;
	  border: 1px solid #2e9da1;
	}
	
	.breadcrumb-item + .breadcrumb-item::before {
      font-family: 'FontAwesome';
      content: "\f105" !important;
      color: #b2b0b0 !important;
    }
</style>

@endsection

@section('content')

	<nav aria-label="breadcrumb ">
          <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item" aria-current="page">Preference</li>
          </ol>
    </nav>
	<div class="container">
		<h1 class="font-weight-bold">Personalize your Schoters homepage</h1>
		<p>Pick 5 top scholarship categories that you are interested to help us deliver the most relevant information with your preferences</p>
		
		<form method="POST" action=#>
			<div class="container categories"></div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="categories[]" value="" id="hidden_categories">
			<button type="submit" class="btn btn-primary button-done font-weight-bold">Done</button>
		</form>
	</div>
@endsection

@section('script')
<script type="text/javascript">
	function getCategories() {
			var displayResources = $(".categories");
			displayResources.html("<h5>Loading...</h5>");
			$.ajax({
				type: "GET",
			    url: "https://private-90552-schoterspersonal.apiary-mock.com/categories",
			    dataType: "json",
			    success: function(result) {
			    	console.log(result);
			    	var output = [];
			    	for (var i in result) {		
			    		output += `<input id="${result[i].id}" type="checkbox" value="${result[i].name}">
				    	<label for="${result[i].id}" value="${result[i].name}" id="${result[i].id}" class='category'>${result[i].name}</label>`;
			    	}
					
			    	displayResources.html(output);
			    }
			});
		}

	$(document).ready(function(){
		getCategories();

		//holds categories selected
		const categories = [];

		$(document).on('click', '.category', function() {
			const c = $(this);
			const category = {
				id: c.attr('id'),
				value: c.attr('value')
			};
			console.log(c);
			console.log(category);

			const selected = categories.findIndex(x => x.id === category.id);
			console.log(selected);
			//check if category is selected -> in array
			if (selected != -1) {
				categories.splice(selected, 1);
			} else {
				categories.push(category);
			}

			console.log(categories);

			const obj = {
				cats: categories
			};

			$("#hidden_categories").val(JSON.stringify(obj));


		});

		$(".button-done").click(function(e) {
			e.preventDefault();
			if (!categories.length) {
				alert("You haven't choose");
				return;
			}

			else if (categories.length > 5) {
				alert("Maximum selected categories is 5");
				return;
			}

			else if (categories.length < 5) {
				alert("Choose 5 categories");
				return;
			}

			
			$("form").attr('action', '{{url('categories')}}');
			$("form").submit();
		});
	});
	
</script>
@endsection