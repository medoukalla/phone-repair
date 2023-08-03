<main>
    <div class="hero">
        <div class="container">
            <div class="companies-board gap-2">
                <h1 class="mb-0">F.A.Q</h1>
                <p class="w-50 text-center">
                    Vos questions les plus fréquentes se trouvent ici.
                </p>
            </div>
        </div>
    </div>
    <!-- Accordion -->
    <div class="questions">
        <div class="container">
            <div class="row">
                <div class="accordion" id="accordionExample">
                   @foreach ( $questions as $question )
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $question->id }}" aria-expanded="false" aria-controls="collapse{{ $question->id }}">
                                    {{ $question->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $question->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">{{ $question->answer }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>