<?php
class pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
	function findPages($count, $limit)
	{
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $pages;
	}

	

	function pageList( $curpage, $pages)
	{
		$page_list="<ul class='pagination'>";
			if(($curpage!=1)&&($curpage))
			{
				$page_list.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=1\" title=\"Trang đầu\">&laquo;</a></li>";
			}
			if(( (int)$curpage-1)>0)
			{
				$page_list.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\" title=\"Về trang trước\">&lsaquo;</a></li>";
			}
			if($curpage>2)
				$page_list.="...";
				
			$vtdau=max((int)$curpage-2,1);
			$vtcuoi=min((int)$curpage+2,$pages);
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.='<li class="active"><a>'.$i."</a></li>";
					}
					else
					{
						$page_list.='<li>'."<a href ='".$_SERVER['PHP_SELF']."?page=".$i."' title='Trang ".$i."'>".$i."</a></li>";
					}
				}

		/*	if(($curpage+2)<$pages)
				$page_list.="...";*/

			if(((int)$curpage+1)<=$pages)
			{
				$page_list.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=".((int)$curpage+1)."\" title=\"Đến trang sau\">&rsaquo;</a></li>";
				$page_list.='<li>'."<a href =\"".$_SERVER['PHP_SELF']."?page=".$pages."\" title=\"Đến trang cuối\">&raquo;</a></li>";
				$page_list.='</ul>';
			}
			return $page_list;
	}

	function nextPrev($curpage,$pages)//chỉ hiển thị 2 nút Truoc và Sau
		{
			$next_prev="";
			if(($curpage-1)<=0)
			{
				$next_prev.="Về trang trước";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\">Về trang trước</a>";
			}
			$next_prev.=" | ";
			if(($curpage+1)>$pages)
			{
				$next_prev.="Đến trang sau";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\">Đến trang sau</a>";
			}
			return $next_prev;
		}
}
?>