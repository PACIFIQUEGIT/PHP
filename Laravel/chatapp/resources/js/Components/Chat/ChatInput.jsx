
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';

export default function ChatInput({ receiver }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        message: '',
    });

    const submit = (e) => {
        e.preventDefault();

        post(route('chat.store', receiver?.id));
        reset("message");
    };

        return (
        <div className="bg-white bottom-0 fixed w-full pl-4">
            <form onSubmit={submit}>

            <TextInput 
            className="bg-white w-full focus:ring-0 shadow:none focus:outline-none border-0 focus:border-0 hover:border-0 pt-3 h-16 overflow-y-auto font-light" 
            name="message"
            value={data.message}
            placeholder="Write a message"
            onChange={(e) => setData('message', e.target.value)} />
            
            </form>
        </div>
    );
}
