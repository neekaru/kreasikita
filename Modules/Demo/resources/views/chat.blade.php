@extends('demo::layouts.master')

@section('content')
<div class="text-center mb-5">
    <p class="lead">Module: {!! config('demo.name') !!}</p>
</div>

<!-- Floating Chat Widget -->
<div x-data="chatWidget" x-init="init" style="position: fixed; bottom: 20px; right: 20px; z-index: 1050; min-width: 340px;">
    <!-- Toggle Bar -->
    <div @click="open = !open" class="rounded-top px-4 py-2 bg-white d-flex align-items-center justify-content-between shadow-sm border" style="cursor:pointer; min-width: 200px; border-color: #dee2e6 !important;">
        <span class="text-success fw-semibold">Online</span>
        <span>
            <i :class="open ? 'bi bi-chevron-down' : 'bi bi-chevron-up'"></i>
        </span>
    </div>
    <!-- Chat Window -->
    <div x-show="open" x-transition class="rounded-bottom bg-white shadow border border-top-0 p-3" style="width: 400px; max-width: 95vw; height: 420px;">
        <div class="mb-2">
            <div class="fw-bold">Live Chat</div>
            <div class="small text-muted">How can we help you?</div>
        </div>
        <div class="mb-3" x-ref="messagesBox" style="height: 220px; overflow-y: auto; background: #f8f9fa; border-radius: 5px; padding: 8px;">
            <template x-if="messages.length === 0">
                <div class="text-muted text-center">No messages yet.</div>
            </template>
            <template x-for="msg in messages" :key="msg.id">
                <div class="mb-2 text-start">
                    <span class="bg-light px-2 py-1 rounded d-inline-block" x-text="msg.text"></span>
                </div>
            </template>
        </div>
        <form class="d-flex flex-column gap-2" @submit.prevent="sendMessage">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type a message..." x-model="message" @keydown.enter.prevent="sendMessage">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
            <div class="d-flex justify-content-between gap-2">
                <label class="btn btn-outline-secondary btn-sm mb-0">
                    <i class="bi bi-paperclip"></i> File
                    <input type="file" class="d-none">
                </label>
                <label class="btn btn-outline-secondary btn-sm mb-0">
                    <i class="bi bi-camera-video"></i> Video
                    <input type="file" accept="video/*" class="d-none">
                </label>
            </div>
        </form>
    </div>
</div>
<!-- Dexie.js CDN for IndexedDB -->
<script src="https://cdn.jsdelivr.net/npm/dexie@3.2.4/dist/dexie.min.js"></script>
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('chatWidget', () => ({
        open: false,
        message: '',
        messages: [],
        db: null,
        async init() {
            this.db = new Dexie('ChatDB');
            this.db.version(1).stores({ messages: '++id, text, created_at' });
            await this.loadMessages();
        },
        async loadMessages() {
            this.messages = await this.db.messages.orderBy('created_at').toArray();
        },
        async sendMessage() {
            if (!this.message.trim()) return;
            const msg = { text: this.message, created_at: new Date().toISOString() };
            await this.db.messages.add(msg);
            this.message = '';
            await this.loadMessages();
            this.scrollToBottom();
        },
        scrollToBottom() {
            this.$nextTick(() => {
                const box = this.$refs.messagesBox;
                if (box) box.scrollTop = box.scrollHeight;
            });
        }
    }));
});
</script>
@endsection