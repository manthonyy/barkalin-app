<h2>Pesan baru dari website Barkalin</h2>
<p><strong>Nama:</strong> {{ $inquiry->name }}<br>
<strong>Perusahaan:</strong> {{ $inquiry->company ?: '-' }}<br>
<strong>Email:</strong> {{ $inquiry->email }}<br>
<strong>Subjek:</strong> {{ $inquiry->subject }}</p>
<p style="white-space:pre-line">{{ $inquiry->message }}</p>
