<x-master>
	<section class="mx-auto p-5 w-2/3 md:w-1/2 lg:w-1/3 bg-white rounded">
		<h1 class="font-bold text-center text-xl">Task Manager</h1>

		<div class="text-center">
			<a class="bg-green-500 rounded-full shadow inline-block my-4 py-2 px-3 text-white" href="/create">Create New
				Task</a>
		</div>

		<div>
			<ul>
				@forelse($tasks as $task)
				<li class="task my-2 p-2 border-2 rounded" draggable="true">
					<h3>
						<span class="font-bold">Title: </span>
						{{ $task->title }}
					</h3>
					<p>
						<span class="font-bold">Descrition: </span>
						{{ $task->description }}
					</p>
					<p>
						<span class="font-bold">Priority: </span>
						{{ $task->priority }}
					</p>

					<div class="flex justify-around">
						<a href="/{{ $task->id }}/edit"><i class="fas fa-edit text-yellow-700"></i></a>

						<form method="POST" action="{{ $task->id }}/delete">
							@csrf
							@method("DELETE")

							<button type="submit">
								<i class="fas fa-trash text-red-700"></i>
							</button>
						</form>
					</div>

				</li>

				@empty
				<li>There are no tasks</li>

				@endforelse
			</ul>
		</div>
	</section>
</x-master>