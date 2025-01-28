<div class="flex flex-col">
    <div class="-m-1.5 ">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded-lg overflow-hidden">

                <table
                    {{ $attributes->merge(['class' => 'table-auto min-w-full text-sm text-left rtl:text-right']) }}>
                    {{ $slot }}
                </table>
            </div>
        </div>
    </div>
</div>
