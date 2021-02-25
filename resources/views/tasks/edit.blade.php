<x-master>
	<section class="container mx-auto p-5 w-1/3 bg-white rounded">
		<h1 class="font-bold text-xl text-center">Edit Task</h1>

		<form method="POST" action="/{{ $task->id }}">
			@csrf
			@method("PATCH")

			<div class="inline">
				<label for="title" class="block font-bold my-1 mx-4 text-gray-700">Title</label>
				<input type="text" name="title"
					class="shadow appearance-none border mx-4 p-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-11/12"
					value="{{ old('title', $task->title) }}" required />
			</div>

			<div class="inline">
				<label for="description" class="block font-bold my-1 mx-4 text-gray-700">Description</label>
				<input type="text" name="description"
					class="shadow appearance-none border mx-4 p-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-11/12"
					value="{{ old('description', $task->description) }}" required />
			</div>

			<div class="inline">
				<label for="title" class="block font-bold my-1 mx-4 text-gray-700">Priority</label>
				<select name="priority"
					class="shadow appearance-none border mx-4 p-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-11/12"
					value="{{ old('priority') }}" required>
					<option value="high" @if($task->priority == 'high') selected @endif
						>High</option>
					<option value="medium" @if($task->priority == 'medium') selected @endif
						>Medium</option>
					<option value="low" @if($task->priority == 'low') selected @endif
						>Low</option>
				</select>
			</div>

			<div class="block">
				<button type="submit" class="bg-blue-500 rounded-lg mx-4 my-2 px-4 py-2 text-white">
					Submit
				</button>
			</div>

			@if ($errors->any())
			<div class="alert alert-danger inline">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

		</form>
	</section>
</x-master>