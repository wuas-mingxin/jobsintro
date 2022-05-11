import React from 'react';
import ReactDOM from 'react-dom';
import { useEffect } from 'react';
import { useState } from 'react';
import ShowComments from './ShowComments';
import moment from 'moment';
function Posts() {
    const [posts,setPosts] = useState([]);
    const [addComment,setAddComment] = useState("");
    const [commentField,setCommentField] = useState(0);
    const [commentId,setCommentId] = useState(0);
    const [commentShow,setCommentShow] = useState({id:0,show:false});
    const [postLiked,setPostLiked] = useState({id:0,show:false});
    
    
    useEffect(()=>{
        axios.get('posts').then((res)=>{
            console.log(res.data[0].likers[0])
            setPosts(res.data)
        })
       
    },[]);

   
    const addCommentToPost = (e,id)=>{
        setCommentField(id)
        setAddComment(e.target.value)
    }

    const addCommentToDatabase = (e,post) => {
        if (e.key === 'Enter') {
            axios({
                method: 'post',
                url: 'add-comment',
                data: {
                    comment: addComment,
                    post_id:post,
                },

            }).then(async function (response) {
               setAddComment('');
                console.log('Comment post id is '+post)
                showComment(post)
                setCommentId(post)
            }).catch(function (error) {
                console.log(error);
            });
        }
    }

    const showComment = (id) =>
    {
        setCommentShow({
            id:id,
            show:true
        });
    }

    const addLikeToPost = (post) => {
        console.log("here")
            axios({
                method: 'get',
                url: 'like/'+post,

            }).then(async function (response) {
            console.log(response.data)
                console.log('Post is liked')
                setPostLiked({
                    id:post,
                    show:true
                })
            }).catch(function (error) {
                console.log(error);
            });
    }

        return (
        <>
            {posts.map((value,index)=>{
                return(
                        <div key={index}>
                            <div  className="card lg:mx-0 uk-animation-slide-bottom-small mt-2">
                                {/* <!-- post header--> */}
                                <div className="flex justify-between items-center lg:p-4 p-2.5">
                                    <div className="flex flex-1 items-center space-x-4">
                                        <a href="#">
                                            <img src={"http://"+window.location.hostname+":8000/"+value.user.avtar} className="bg-gray-200 border border-white rounded-full w-10 h-10"/>
                                        </a>
                                        <div className="flex-1 font-semibold capitalize">
                                            <a href="#" className="text-white dark:text-gray-100"> {value.user.firstname} {value.user.lastname} </a>
                                            <div className="text-gray-700 flex items-center space-x-2">{moment(moment(value.created_at).format('YYYY.MM.DDTHH:mm:ss'), 'YYYY.MM.DDTHH:mm:ss').fromNow()} <ion-icon name="people"></ion-icon></div>
                                        </div>
                                    </div>
                                    <div>

                                    <a href="#">
                                        <i className="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i>
                                    </a>
                                    <div className="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                                    uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                                        <ul className="space-y-1">
                                            <li>
                                                <a href="#" className="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <i className="uil-share-alt mr-1"></i> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" className="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <i className="uil-edit-alt mr-1"></i>  Edit Post
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" className="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <i className="uil-comment-slash mr-1"></i>   Disable comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" className="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <i className="uil-favorite mr-1"></i>  Add favorites
                                                </a>
                                            </li>
                                            <li>
                                            <hr className="-mx-2 my-2 dark:border-gray-800"/>
                                            </li>
                                            <li>
                                                <a href="#" className="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                <i className="uil-trash-alt mr-1"></i>  Delete
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                    </div>
                                </div>
                                {value.post_text !== null ?
                                    <div className="p-5 pt-0 border-b dark:border-gray-700">
                                        {value.post_text}
                                    </div>
                                : ''}
                                { value.post_file !== null ?
                                <div uk-lightbox="true">
                                    <a href={"http://"+window.location.hostname+":8000/"+value.post_file}>
                                        <img src={"http://"+window.location.hostname+":8000/"+value.post_file} alt="" className="max-h-96 w-full object-cover"/>
                                    </a>
                                </div>
                                : ''}


                                <div className="p-4 space-y-3">

                                    <div className="flex space-x-4 lg:font-bold">
                                       
                                        <button onClick={() => {addLikeToPost(value.id)}} className="flex items-center space-x-2 flex-1 justify-left  btn-like">
                                            <div className={`p-2 rounded-full text-black 'lg:bg-blue-600 dark:bg-blue-600`}>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" className="dark:text-gray-100">
                                                    <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                </svg>
                                            </div>
                                            <div>Like</div>
                                        </button>
                                        
                                        <button onClick={() => showComment(value.id)} className="flex items-center space-x-2 flex-1 justify-center  btn-like">
                                            <div className="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" className="dark:text-gray-100">
                                                    <path fillRule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clipRule="evenodd" />
                                                </svg>
                                            </div>
                                            <div> 
                                                <div>  Comments </div>
                                            </div>
                                        </button>
                                        <button className="flex items-center space-x-2 flex-1 justify-end btn-like">
                                            <div className="p-2 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" className="dark:text-gray-100">
                                                    <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                                </svg>
                                            </div>
                                            <div> Share</div>
                                        </button>
                                    </div>
                                    <div className="flex items-center space-x-3 pt-2">
                                        <div className="flex items-center">
                                            <img src={"http://"+window.location.hostname+":8000/"+value.user.avtar} alt="" className="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900"/>
                                            <img src={"http://"+window.location.hostname+":8000/"+value.user.avtar} alt="" className="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2"/>
                                            <img src={"http://"+window.location.hostname+":8000/"+value.user.avtar} alt="" className="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2"/>
                                        </div>
                                        <div className="dark:text-gray-100">
                                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                        </div>
                                    </div>
                                    {/*Comments Section*/}
                                    <div className={`border-t py-4 space-y-4 dark:border-gray-600 comments${value.id}`} id={`comments${value.id}`}>
                                        {commentShow.id == value.id && commentShow.show ? <ShowComments id={value.id}/> : ""}
                                    </div>

                                    {/* <button className={`hover:text-blue-600 hover:underline button-show-more${value.id}`} onClick={() => showComment(value.id)}>  Veiw {value.comments.length} comments </button> */}
                                    {/*Comments Section*/}

                                    <div className="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                                        <input placeholder="Add your Comment.." name='comment' value={commentField == value.id ? addComment : ''} onChange={(e) => addCommentToPost(e,value.id)}  onKeyDown={(e)=>{ addCommentToDatabase(e,value.id)}}  className="bg-transparent max-h-10 shadow-none px-5"/>
                                        <div className="-m-0.5 absolute bottom-0 flex items-center right-3 text-xl">
                                            <a href="#">
                                                <ion-icon name="happy-outline" className="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                            </a>
                                            <a href="#">
                                                <ion-icon name="image-outline" className="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                            </a>
                                            <a href="#">
                                                <ion-icon name="link-outline" className="hover:bg-gray-200 p-1.5 rounded-full"></ion-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                );
            })}
        </>
    );
}

export default Posts;

if (document.getElementById('posts')) {
    ReactDOM.render(<Posts />, document.getElementById('posts'));
}


