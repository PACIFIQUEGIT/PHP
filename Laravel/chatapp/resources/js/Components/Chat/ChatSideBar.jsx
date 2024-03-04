import { Link } from '@inertiajs/react';

export default function ChatSideBar({recentMessages}) {
    return (
        <>
                                    <div className="search-box text-slate-300 h-10">
                                        <div className="flex justify-between border-b border-slate-100 px-5 pb-1 items-center">
                                            <form className="flex items-center justify-center" action="">
                                                <i className="fa fa-search"></i>
                                                <input type="search" className="font-light h-4 shadow:none focus:ring-0 border-0 focus:border-0 hover:border-0 text-slate" placeholder="Search"/>
                                            </form>
                                            <div>
                                                <button className="relative">
                                                <i className="fa fa-message"></i>
                                                <i className="fa fa-plus absolute -top-2 text-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="user-list overflow-y-auto h-screen">
                                        {
                                           recentMessages.map((user, index) => (
                                        
                                        <Link 
                                            href={`/chat/${user.userid}`}
                                            key={index} className="flex transition hover:bg-slate-300 hover:cursor-pointer px-3 py-3">
                                            <div className="pr-4">
                                               { 
                                                user?.avatar !== undefined ?
                                                (<img src="data:image/jpeg;base64,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" alt="" 
                                            width="20" />) :
                                                (<i className="fa fa-user-circle text-gray-300 text-5xl"></i>)
                                                }
                                            </div>
                                            <div>
                                                <h3 className="text-violet-500 text-md">{user.name}</h3>
                                                <p className="text-sm text-gray font-light overflow-hidden h-5">
                                                    {user.message}
                                                </p>
                                            </div>
                                        </Link>
                                        
                                           ))
                                        
                                        }
                                        
                                    </div>  
        </>
    );
}
