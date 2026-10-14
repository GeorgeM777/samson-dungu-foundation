@extends('admin.content.layout')

@section('page_title', 'Donation Page')

@section('content_body')
    <form method="POST" action="{{ route('admin.content.donation-page.update') }}">
        @csrf
        @method('PUT')

        <div class="content-card">
            <h3>Hero Block</h3>
            <div class="form-group">
                <label for="donation-heading">Hero Heading</label>
                <input id="donation-heading" type="text" name="heading" value="{{ old('heading', $settings['heading']) }}" required>
            </div>
            <div class="form-group">
                <label for="donation-subheading">Hero Subheading</label>
                <textarea id="donation-subheading" name="subheading" required>{{ old('subheading', $settings['subheading']) }}</textarea>
            </div>
        </div>

        <div class="content-card">
            <h3>Story Block</h3>
            <div class="form-group">
                <label for="donation-story">Story Content (Rich Text)</label>
                <textarea id="donation-story" name="story" rows="7" required>{{ old('story', $settings['story']) }}</textarea>
                <small style="color:#888;">Basic HTML formatting is supported, such as paragraphs, emphasis, and lists.</small>
            </div>
        </div>

        <div class="content-card">
            <h3>Donation Link & Button</h3>
            <div class="form-grid">
                <div class="form-group">
                    <label for="donation-button-text">Donate Button Text</label>
                    <input id="donation-button-text" type="text" name="button_text" value="{{ old('button_text', $settings['button_text']) }}" required>
                </div>
                <div class="form-group">
                    <label for="donation-link">SwApp Link URL</label>
                    <input id="donation-link" type="url" name="link" value="{{ old('link', $settings['link']) }}" required>
                </div>
            </div>
        </div>

        <div class="content-card">
            <h3>Suggested Donation Amounts</h3>
            <div id="donation-amount-rows">
                @foreach($amounts as $index => $amount)
                    <div class="donation-amount-row">
                        <div class="form-group">
                            <label for="donation-amount-{{ $index }}">Amount</label>
                            <input id="donation-amount-{{ $index }}" type="text" name="amounts[{{ $index }}][amount]" value="{{ $amount['amount'] ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="donation-description-{{ $index }}">Description</label>
                            <input id="donation-description-{{ $index }}" type="text" name="amounts[{{ $index }}][description]" value="{{ $amount['description'] ?? '' }}" required>
                        </div>
                        <button class="btn btn-danger btn-sm donation-remove-row" type="button" aria-label="Remove donation amount">Remove</button>
                    </div>
                @endforeach
            </div>
            <template id="donation-amount-template">
                <div class="donation-amount-row">
                    <div class="form-group">
                        <label for="donation-amount-__INDEX__">Amount</label>
                        <input id="donation-amount-__INDEX__" type="text" name="amounts[__INDEX__][amount]" required>
                    </div>
                    <div class="form-group">
                        <label for="donation-description-__INDEX__">Description</label>
                        <input id="donation-description-__INDEX__" type="text" name="amounts[__INDEX__][description]" required>
                    </div>
                    <button class="btn btn-danger btn-sm donation-remove-row" type="button" aria-label="Remove donation amount">Remove</button>
                </div>
            </template>
            <button class="btn btn-sm" id="donation-add-row" type="button">Add Amount</button>
        </div>

        <button type="submit" class="btn">Save Donation Page</button>
    </form>

    <style>
        .donation-amount-row {
            display: grid;
            grid-template-columns: minmax(120px, 0.7fr) minmax(220px, 2fr) auto;
            gap: 14px;
            align-items: end;
            padding: 16px;
            margin-bottom: 12px;
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
        }
        .donation-amount-row .form-group {
            margin-bottom: 0;
        }
        @media (max-width: 650px) {
            .donation-amount-row {
                grid-template-columns: 1fr;
            }
            .donation-amount-row .btn {
                justify-self: start;
            }
        }
    </style>

    <script>
        (() => {
            const rows = document.getElementById('donation-amount-rows');
            const template = document.getElementById('donation-amount-template');
            let nextIndex = rows.querySelectorAll('.donation-amount-row').length;

            document.getElementById('donation-add-row').addEventListener('click', () => {
                const markup = template.innerHTML.replaceAll('__INDEX__', nextIndex++);
                rows.insertAdjacentHTML('beforeend', markup);
            });

            rows.addEventListener('click', (event) => {
                if (event.target.closest('.donation-remove-row')) {
                    event.target.closest('.donation-amount-row').remove();
                }
            });
        })();
    </script>
@endsection