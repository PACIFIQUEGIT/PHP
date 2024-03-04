import { Fragment } from "react";

export default function ChatMessages({ messages, auth_id }) {

    const IsReceivedMessage = (message) => {
        return message.receiverid === auth_id;
    }

    return (
        <>
        {(messages || []).map((message, index) => (
                                    <Fragment key={index}>
                                        <div 
                                            className={`${
                                            IsReceivedMessage(message) ? 'receive-chat' : 'send-chat'
                                            } ${
                                                IsReceivedMessage(message) ? 'justify-start' : 'justify-end'
                                            } relative flex `}
                                        >
                                        <div 
                                            className={`${
                                                IsReceivedMessage(message) ? 'bg-violet-400' : 'bg-violet-200'} ${
                                                IsReceivedMessage(message) ? 'text-white' : 'text-slate-500'
                                            }px-5 mb-2 py-3 text-sm max-w-[80%] rounded`}>
                                            <p>{message?.message}</p>
                                        </div>
                                        </div>
                                    </Fragment>
                                    ))
        }
        </>
    );
}
