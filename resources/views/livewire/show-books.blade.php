<x-slot name="title">Books List</x-slot>
<div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Publication Year
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Publisher
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ISBN
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr class="bg-white border-b text-black hover:bg-gray-300">
                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                            {{ $book['title'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $book['author'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book['publication_year'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book['publisher'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book['isbn'] }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $books->links() }}
    </div>
</div>
