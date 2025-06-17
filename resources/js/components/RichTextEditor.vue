<template>
  <div class="rich-text-editor">
    <div class="editor-menu" v-if="editor">
      <button @click="editor.chain().focus().toggleBold().run()" :class="{ 'is-active': editor.isActive('bold') }">
        <i class="fas fa-bold"></i>
      </button>
      <button @click="editor.chain().focus().toggleItalic().run()" :class="{ 'is-active': editor.isActive('italic') }">
        <i class="fas fa-italic"></i>
      </button>
      <button @click="editor.chain().focus().toggleStrike().run()" :class="{ 'is-active': editor.isActive('strike') }">
        <i class="fas fa-strikethrough"></i>
      </button>
      <button @click="editor.chain().focus().toggleBulletList().run()" :class="{ 'is-active': editor.isActive('bulletList') }">
        <i class="fas fa-list-ul"></i>
      </button>
      <button @click="editor.chain().focus().toggleOrderedList().run()" :class="{ 'is-active': editor.isActive('orderedList') }">
        <i class="fas fa-list-ol"></i>
      </button>
    </div>
    <editor-content :editor="editor" class="editor-content" />
  </div>
</template>

<script setup lang="ts">
import { useEditor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import { onBeforeUnmount, watch } from 'vue'

const props = defineProps<{
  modelValue: string
}>()

const emit = defineEmits<{
  (e: 'update:modelValue', value: string): void
}>()

const editor = useEditor({
  content: props.modelValue,
  extensions: [
    StarterKit,
  ],
  onUpdate: ({ editor }) => {
    emit('update:modelValue', editor.getHTML())
  },
})

watch(() => props.modelValue, (newValue) => {
  const isSame = newValue === editor.value?.getHTML()
  if (!isSame) {
    editor.value?.commands.setContent(newValue, false)
  }
})

onBeforeUnmount(() => {
  editor.value?.destroy()
})
</script>

<style scoped>
.rich-text-editor {
  border: 1px solid #ddd;
  border-radius: 4px;
}

.editor-menu {
  padding: 8px;
  border-bottom: 1px solid #ddd;
  display: flex;
  gap: 8px;
}

.editor-menu button {
  padding: 4px 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  background: white;
  cursor: pointer;
}

.editor-menu button:hover {
  background: #f5f5f5;
}

.editor-menu button.is-active {
  background: #e2e8f0;
  border-color: #cbd5e1;
}

.editor-content {
  padding: 16px;
  min-height: 200px;
}

.editor-content :deep(p) {
  margin: 0;
}

.editor-content :deep(ul),
.editor-content :deep(ol) {
  padding-left: 20px;
}
</style> 