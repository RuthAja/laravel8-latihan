<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Selamat datang di website</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque in ad ab itaque fugiat!
                            Obcaecati veniam fuga commodi. Praesentium, ut! Sint placeat rerum in cupiditate, corporis
                            praesentium voluptatum pariatur consequatur.</p>
                        <p>Unde architecto ea rem soluta eos eveniet, accusantium velit quisquam placeat iste
                            repellendus facere explicabo recusandae? Aspernatur nobis rerum voluptatem illo quod
                            suscipit dolore sapiente obcaecati dolorum sed, sunt similique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>