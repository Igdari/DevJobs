<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4 ">Postularme a esta Vacante</h3>

    <form class="w-96 mt-5" action="">
        <div class="mb-4">
            <x-input-label for="CV" :value="__('Curriculum o Hoja de Vida (PDF)')" />
            <x-text-input id="CV" type="file" accept=".pdf" class="block mt-1 w-full"/>
        </div>

        <x-primary-button class="my-5">
            {{ __('Postularme') }}
        </x-primary-button>
    </form>
</div>
