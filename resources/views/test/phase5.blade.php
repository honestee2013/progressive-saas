@extends('layouts.app')

@section('title', 'Phase 5 Test - Package Development')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card test-card shadow">
            <div class="card-header bg-white">
                <h2 class="h4 mb-0">
                    <i class="bi bi-box-seam text-primary me-2"></i>
                    Phase 5: Laravel UI Package Development
                </h2>
            </div>

            <div class="card-body">
                <!-- Package Status -->
                <div class="alert alert-info mb-4">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-box display-6 me-3"></i>
                        <div>
                            <h5 class="alert-heading mb-1">Package Status</h5>
                            <p class="mb-0">
                                Testing <strong>quicker-faster/laravel-ui</strong> package
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Test 1: Package Components -->
                <h3 class="h5 mb-3 border-bottom pb-2">
                    <i class="bi bi-1-circle text-primary me-2"></i>
                    Test 1: Package Components
                </h3>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h4>Livewire Components from Package</h4>
                        <livewire:quickerfaster.counter />
                    </div>
                    <div class="col-md-6">
                        <h4>Todo List from Package</h4>
                        <livewire:quickerfaster.todo-list />
                    </div>
                </div>

                <!-- Test 2: Blade Components -->
                <h3 class="h5 mb-3 border-bottom pb-2">
                    <i class="bi bi-2-circle text-success me-2"></i>
                    Test 2: Blade Components
                </h3>
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <x-quickerfaster-alert type="success" dismissible>
                            Success alert with dismiss button
                        </x-quickerfaster-alert>
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-quickerfaster-alert type="warning">
                            Warning alert without dismiss
                        </x-quickerfaster-alert>
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-quickerfaster-alert type="danger" icon="bi-exclamation-octagon">
                            Custom icon alert
                        </x-quickerfaster-alert>
                    </div>
                </div>

                <div class="mb-5">
                    <x-quickerfaster-card title="Test Card Component" subtitle="With subtitle">
                        <p>This card is rendered from the package using Blade components.</p>
                        <p>You can add any content here and it will be properly styled.</p>
                    </x-quickerfaster-card>
                </div>

                <!-- Test 3: Package Features -->
                <h3 class="h5 mb-3 border-bottom pb-2">
                    <i class="bi bi-3-circle text-warning me-2"></i>
                    Test 3: Package Features
                </h3>
                <div class="mb-5">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-lightning-charge display-4 text-warning mb-3"></i>
                                    <h6>Livewire Integration</h6>
                                    <p class="small text-muted">Components work without modification</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-palette display-4 text-primary mb-3"></i>
                                    <h6>Bootstrap 5 Styled</h6>
                                    <p class="small text-muted">Uses your existing Bootstrap setup</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-box-arrow-up display-4 text-success mb-3"></i>
                                    <h6>Easy Installation</h6>
                                    <p class="small text-muted">One command: <code>php artisan quickerfaster:install</code></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Test Results -->
                <div class="alert alert-success">
                    <h4 class="alert-heading">
                        <i class="bi bi-check-all me-2"></i>
                        Phase 5 Test Results
                    </h4>
                    <p class="mb-2">
                        <strong>Status:</strong>
                        <span class="badge bg-success">PACKAGE DEVELOPMENT COMPLETE</span>
                    </p>
                    <p class="mb-0">
                        The package is now ready to be published to GitHub and Packagist.
                        You can install it in any Laravel project with:
                        <code>composer require quicker-faster/laravel-ui</code>
                    </p>
                </div>

                <!-- Next Steps -->
                <div class="card border-primary">
                    <div class="card-header bg-primary bg-opacity-10">
                        <h5 class="mb-0">
                            <i class="bi bi-github text-primary me-2"></i>
                            Package Deployment Steps
                        </h5>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Push package to GitHub repository</li>
                            <li>Submit to Packagist.org</li>
                            <li>Set up GitHub webhook for automatic updates</li>
                            <li>Add documentation and examples</li>
                            <li>Test installation in a fresh Laravel project</li>
                        </ol>
                        <div class="text-center mt-3">
                            <a href="/progressive/test-package-status" class="btn btn-outline-primary me-2">
                                <i class="bi bi-cloud-arrow-up me-1"></i>
                                Check Package Status
                            </a>
                            <a href="/progressive/test-quickerfaster" class="btn btn-primary">
                                <i class="bi bi-lightning-charge me-1"></i>
                                Test Package Components
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
