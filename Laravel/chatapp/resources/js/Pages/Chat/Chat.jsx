import ChatInput from '@/Components/Chat/ChatInput';
import ChatMessages from '@/Components/Chat/ChatMessages';
import ChatSideBar from '@/Components/Chat/ChatSideBar';
import ChatUserInfoHeader from '@/Components/Chat/ChatUserInfoHeader';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { useEffect } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';


export default function Chat({auth, recentMessages, receiver, messages}) {
    return (
        <AuthenticatedLayout
            user={auth.user} 
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight"></h2>}
        >
           

            <div className="">

                        <div className="messenger p-4 overflow-hidden">
                            <div className="flex">

                                <div className="basis-2/6 pt-3 bg-white border-r border-slate-100">
                                    <ChatSideBar recentMessages={recentMessages} />
                                </div>

                                <div className="basis-4/6">
                                    {
                                        receiver?.id ? (
                                        <>
                                        <ChatUserInfoHeader receiver={receiver} />

                                        <div className="messenger mt-4">
    
                                            <div className="px-4">
    
                                            <ChatMessages messages={messages} auth_id={auth?.user?.id} />
    
                                            </div>
    
                                            <ChatInput receiver={receiver} />
                                            
                                        </div>
                                        </>
                                        ) : (
                                        <div className="flex justify-center items-center bg-slate-100 h-screen">
                                        <p className="font-bold text-3xl text-gray-500">
                                            Please select a User to start chatting...
                                        </p>
                                        </div>
                                        )
                                    }
                                    
                                </div>

                            </div>
                        </div>

            </div>
        </AuthenticatedLayout>
    );
}
