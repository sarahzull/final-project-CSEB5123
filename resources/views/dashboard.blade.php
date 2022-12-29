<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <div class="p-6 text-gray-900">
                    <p class="mb-6 text-center">
                        <span class="text-2xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-cyan-600">
                            Final Year Project 1 Department SE
                        </span>
                    </p>
                    
                    <p class="mb-2">The final year project is one of the requirements that have to be taken by CCI students in order to graduate. The project is divided into two phases: Project 1 (CGEB4313) and Project 2 (CGEB4323). Each of the projects is taken in one semester and should be taken consecutively. The objectives or rationales of having a final year project for Bachelor of Computer Science (Hons) Software Engineering students are as follows:</p>

                    <ol class="list-decimal px-8 mb-2">
                        <li>To apply knowledge/skills acquired from previous classes.</li>
                        <li>To gain experience in system development.</li>
                        <li>To learn new technologies and techniques not taught in class.</li>
                    </ol>
                    
                    <p>It is hoped that by undergoing the development of the final year project, a student will be more prepared to perform jobs in the real world.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
