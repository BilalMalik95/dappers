@extends('frontend.layout')

@section('title', 'RAG Systems Development Services | DappersTech')
@section('meta_description', 'Custom RAG systems that answer accurately from your own data, with citations. Vector search, document chunking, and production-ready AI pipelines.')
@section('meta_keywords', 'RAG systems, retrieval augmented generation, custom ChatGPT on your data, vector databases, document intelligence, Pinecone, pgvector, semantic search')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "RAG Systems & Document Intelligence",
      "serviceType": "Retrieval-Augmented Generation Development",
      "provider": {"@id": "https://dapperstech.com/#organization", "@type": "Organization", "name": "DappersTech IT Services", "url": "https://dapperstech.com"},
      "description": "Retrieval-augmented generation pipelines that ground LLM answers in your own documents, knowledge base, or database, with vector search, chunking strategy, and citation tracking.",
      "areaServed": "Worldwide",
      "url": "https://dapperstech.com/services/ai-development/rag-systems"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dapperstech.com/"},
        {"@type": "ListItem", "position": 2, "name": "RAG Systems", "item": "https://dapperstech.com/services/ai-development/rag-systems"}
      ]
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a RAG system and how does it work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A RAG (Retrieval-Augmented Generation) system connects a large language model to your own documents, knowledge base, or database. When a user asks a question, the system retrieves the most relevant content using vector search, then the LLM generates an answer grounded in that content, with citations, instead of guessing. This makes answers accurate, up to date, and specific to your business."
      }
    },
    {
      "@type": "Question",
      "name": "How is a RAG system different from a custom-built ChatGPT?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A custom-built ChatGPT is the chat interface and model layer; a RAG system is what makes it answer correctly from your private data. We usually deliver both together: a retrieval-augmented backend so your custom ChatGPT responds only from your approved documents, reducing hallucinations and keeping answers on-brand."
      }
    },
    {
      "@type": "Question",
      "name": "Which vector databases do you use for RAG development?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We build production RAG pipelines on Pinecone, pgvector (Postgres), Weaviate, Qdrant, and Chroma, choosing the right one for your data volume, budget, and hosting requirements. We handle chunking strategy, embeddings, re-ranking, and citation tracking end to end."
      }
    },
    {
      "@type": "Question",
      "name": "Can a RAG system work securely with our private internal documents?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We can deploy RAG systems inside your own cloud or on infrastructure you control, with access rules, data isolation, and no training on your data. This is a common requirement for US and UK clients in finance, healthcare, and legal, and we build to those standards."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to build a production RAG system?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A focused production-ready RAG system typically takes 3 to 6 weeks depending on data sources, integrations, and security needs. We start with a fixed-scope build so you get a working, measurable system rather than an open-ended demo."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0, 0, 0,.96) 0%, rgba(0, 0, 0,.78) 44%, rgba(0, 0, 0,.36) 100%), url('https://images.pexels.com/photos/8294554/pexels-photo-8294554.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('ai_development') }}">AI Development</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>RAG Systems</span>
            </nav>
            <span class="services-page-kicker">RAG Systems</span>
            <h1>
                RAG systems that answer from<br>
                your data, accurately, with citations
            </h1>
            <p>
                Retrieval-augmented generation pipelines grounded in your documents,
                not guesses. Built for accuracy in production, not demos.
            </p>
            <div class="services-page-hero__actions">
                <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                    Get a Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>            </div>
        </div>
    </div>
</section>


<section class="services-premium-v2">
    <div class="container">
        <div class="services-v2-head">
            <h2>What Goes Into a Production RAG System</h2>
            <p>
                Every RAG build we ship covers these fundamentals, tuned to your actual content, not a generic tutorial pipeline.
            </p>
        </div>

        <a href="{{ route('contact_us') }}" class="service-feature-card">
            <div class="service-feature-img">
                <img src="https://images.pexels.com/photos/9553905/pexels-photo-9553905.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Vector database and document retrieval architecture" loading="lazy" decoding="async">
            </div>
            <div class="service-feature-content">
                <span class="service-tag">Core Service</span>
                <h3>Vector Database Architecture</h3>
                <p>
                    Pinecone, pgvector, or Weaviate, indexed and tuned so retrieval stays fast and relevant as your data grows.
                </p>
                <div class="service-feature-points">
                    <span><i class="fa-solid fa-check"></i> Pinecone / pgvector / Weaviate</span>
                    <span><i class="fa-solid fa-check"></i> Hybrid & Metadata Search</span>
                    <span><i class="fa-solid fa-check"></i> Scales With Your Data</span>
                </div>
                <div class="service-card-action">
                    Discuss This Service
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </a>

        <div class="build-grid">
            <div class="why-item">
                <div class="why-icon"><i class="fa-solid fa-layer-group"></i></div>
                <div>
                    <h3>Chunking & Embedding Strategy</h3>
                    <p>Content aware chunking and the right embedding model for your domain.</p>
                </div>
            </div>
            <div class="why-item">
                <div class="why-icon"><i class="fa-solid fa-quote-right"></i></div>
                <div>
                    <h3>Citation & Source Tracking</h3>
                    <p>Every answer links back to its source so you can verify it.</p>
                </div>
            </div>
            <div class="why-item">
                <div class="why-icon"><i class="fa-solid fa-file-lines"></i></div>
                <div>
                    <h3>Document Intelligence</h3>
                    <p>PDFs, spreadsheets, and scanned files turned into a searchable knowledge base.</p>
                </div>
            </div>
            <div class="why-item">
                <div class="why-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                <div>
                    <h3>Retrieval Evals & Tuning</h3>
                    <p>Precision and recall measured against real queries, not guesswork.</p>
                </div>
            </div>
            <div class="why-item">
                <div class="why-icon"><i class="fa-solid fa-comments"></i></div>
                <div>
                    <h3>Knowledge Base Chatbots</h3>
                    <p>Customer or internal chatbots that answer only from your data.</p>
                </div>
            </div>
            <div class="why-item">
                <div class="why-icon"><i class="fa-solid fa-database"></i></div>
                <div>
                    <h3>Multi Source RAG</h3>
                    <p>One grounded answer pulled from multiple data sources and APIs.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-feature services-feature-v2">
    <div class="container">
        <div class="why-choose-box">
            <div class="why-choose-content">
                <h2>Most RAG demos fall apart the moment real documents hit them</h2>
                <p>
                    A pipeline that works on three sample PDFs often breaks on messy, real-world data. We design for that from day one.
                </p>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                        <div>
                            <h3>Measured Retrieval Quality</h3>
                            <p>Tested against real queries before launch, not eyeballed.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-quote-right"></i></div>
                        <div>
                            <h3>Verifiable Answers</h3>
                            <p>Every answer cites its source, so nothing is taken on faith.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div>
                            <h3>Built for Your Data</h3>
                            <p>Chunking and embeddings tuned to your actual content.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-lock"></i></div>
                        <div>
                            <h3>Full Code Ownership</h3>
                            <p>The pipeline and prompts are yours. No lock in.</p>
                        </div>
                    </div>
                </div>
                <div class="why-choose-actions">
                    <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                        Get a Free Consultation
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="why-rating">
                        <div class="why-stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span>5 star Upwork rating, 40+ systems shipped</span>
                    </div>
                </div>
            </div>
            <div class="why-choose-visual">
                <img src="https://images.pexels.com/photos/9553909/pexels-photo-9553909.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Document intelligence and vector search visualisation" loading="lazy" decoding="async">
                <div class="why-floating-card why-floating-card--top">
                    <strong>40+</strong>
                    <span>Systems Shipped</span>
                </div>
                <div class="why-floating-card why-floating-card--bottom">
                    <strong>9+</strong>
                    <span>Years in Software</span>
                </div>
                <div class="why-tech-pill">
                    <i class="fa-solid fa-database"></i>
                    Pinecone, pgvector, LangChain, OpenAI
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">
        <div class="workflow-head">
            <h2>From raw documents to a reliable RAG system in 4 stages</h2>
            <p>Every RAG build follows the same disciplined process, because retrieval quality is won or lost in the details.</p>
        </div>
        <div class="workflow-layout">
            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/89724/pexels-photo-89724.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="RAG pipeline build process" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>Our RAG Flow</span>
                    <h3>Ingest, Index, Retrieve, Evaluate</h3>
                </div>
            </div>
            <div class="workflow-steps">
                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Data Audit & Ingestion</span>
                        <h3>Understand and prepare your source data</h3>
                        <p>We review document formats, volume, and update frequency, then build the ingestion pipeline to match.</p>
                    </div>
                </div>
                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Chunking & Indexing</span>
                        <h3>Chunk, embed, and index for retrieval</h3>
                        <p>Content aware chunking and embedding, indexed with the metadata your use case needs.</p>
                    </div>
                </div>
                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Retrieval & Generation</span>
                        <h3>Build the retrieval and answer pipeline</h3>
                        <p>Hybrid search, re ranking, and prompt design so answers stay grounded in retrieved passages.</p>
                    </div>
                </div>
                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Evaluate & Launch</span>
                        <h3>Test against real queries, then ship</h3>
                        <p>Retrieval and answer quality measured against a real query set before the system reaches your users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<style>
.hd-faq{padding:80px 0;background:linear-gradient(180deg, rgba(20,141,255,.04), transparent);}
.hd-faq .hd-faq-inner{max-width:900px;margin:0 auto;padding:0 20px;}
.hd-faq h2{font-family:"Kanit", sans-serif;font-size:clamp(28px, 4vw, 40px);color:#fff;text-align:center;margin-bottom:14px;font-weight:700;}
.hd-faq .hd-faq-sub{text-align:center;color:rgba(255,255,255,.6);font-family:"Poppins", sans-serif;margin-bottom:40px;}
.hd-faq details{background:#171821;border:1px solid rgba(255,255,255,.08);border-radius:16px;margin-bottom:14px;padding:0 22px;transition:border-color .25s ease;}
.hd-faq details[open]{border-color:rgba(20,141,255,.5);}
.hd-faq summary{cursor:pointer;list-style:none;padding:22px 0;font-family:"Kanit", sans-serif;font-size:18px;font-weight:500;color:#fff;display:flex;justify-content:space-between;align-items:center;gap:16px;}
.hd-faq summary::-webkit-details-marker{display:none;}
.hd-faq summary::after{content:"+";font-size:26px;color:#148dff;font-weight:300;line-height:1;transition:transform .25s ease;}
.hd-faq details[open] summary::after{transform:rotate(45deg);}
.hd-faq details p{color:rgba(255,255,255,.7);font-family:"Poppins", sans-serif;font-size:15px;line-height:1.7;padding:0 0 24px;margin:0;}
</style>

<section class="hd-faq">
  <div class="hd-faq-inner">
    <h2>RAG Systems, Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>What is a RAG system and how does it work?</summary>
        <p>A RAG (Retrieval Augmented Generation) system connects a large language model to your own documents, knowledge base, or database. When a user asks a question, the system retrieves the most relevant content using vector search, then the LLM generates an answer grounded in that content, with citations, instead of guessing. This makes answers accurate, up to date, and specific to your business.</p>
      </details>
      <details>
        <summary>How is a RAG system different from a custom built ChatGPT?</summary>
        <p>A custom built ChatGPT is the chat interface and model layer; a RAG system is what makes it answer correctly from your private data. We usually deliver both together: a retrieval augmented backend so your custom ChatGPT responds only from your approved documents, reducing hallucinations and keeping answers on brand.</p>
      </details>
      <details>
        <summary>Which vector databases do you use for RAG development?</summary>
        <p>We build production RAG pipelines on Pinecone, pgvector (Postgres), Weaviate, Qdrant, and Chroma, choosing the right one for your data volume, budget, and hosting requirements. We handle chunking strategy, embeddings, re ranking, and citation tracking end to end.</p>
      </details>
      <details>
        <summary>Can a RAG system work securely with our private internal documents?</summary>
        <p>Yes. We can deploy RAG systems inside your own cloud or on infrastructure you control, with access rules, data isolation, and no training on your data. This is a common requirement for US and UK clients in finance, healthcare, and legal, and we build to those standards.</p>
      </details>
      <details>
        <summary>How long does it take to build a production RAG system?</summary>
        <p>A focused production ready RAG system typically takes 3 to 6 weeks depending on data sources, integrations, and security needs. We start with a fixed scope build so you get a working, measurable system rather than an open ended demo.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <h2>Turn your documents into accurate, cited AI answers</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
