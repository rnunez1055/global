USE [GeComCI]਍䜀伀ഀഀ
/****** Object:  User [sigecom_log]    Script Date: 06/07/2013 17:39:00 ******/਍䌀刀䔀䄀吀䔀 唀匀䔀刀 嬀猀椀最攀挀漀洀开氀漀最崀 䘀伀刀 䰀伀䜀䤀一 嬀猀椀最攀挀漀洀开氀漀最崀 圀䤀吀䠀 䐀䔀䘀䄀唀䰀吀开匀䌀䠀䔀䴀䄀㴀嬀搀戀漀崀ഀഀ
GO਍⼀⨀⨀⨀⨀⨀⨀ 伀戀樀攀挀琀㨀  吀愀戀氀攀 嬀搀戀漀崀⸀嬀䜀䌀开唀猀甀愀爀椀漀崀    匀挀爀椀瀀琀 䐀愀琀攀㨀 　㘀⼀　㜀⼀㈀　㄀㌀ ㄀㜀㨀㌀㤀㨀　　 ⨀⨀⨀⨀⨀⨀⼀ഀഀ
SET ANSI_NULLS ON਍䜀伀ഀഀ
SET QUOTED_IDENTIFIER ON਍䜀伀ഀഀ
SET ANSI_PADDING ON਍䜀伀ഀഀ
CREATE TABLE [dbo].[GC_Usuario](਍ऀ嬀渀椀搀甀猀甀愀爀椀漀崀 嬀椀渀琀崀 䤀䐀䔀一吀䤀吀夀⠀㄀Ⰰ㄀⤀ 一伀吀 一唀䰀䰀Ⰰഀഀ
	[cusuario] [varchar](20) NULL,਍ऀ嬀挀挀漀渀琀爀愀猀攀渀愀崀 嬀瘀愀爀挀栀愀爀崀⠀㔀　⤀ 一唀䰀䰀Ⰰഀഀ
	[nestado] [int] NULL,਍ऀ嬀渀愀挀琀椀瘀愀爀崀 嬀椀渀琀崀 一唀䰀䰀Ⰰഀഀ
	[nidpersona] [int] NULL,਍ 䌀伀一匀吀刀䄀䤀一吀 嬀倀䬀开䜀䌀开唀猀甀愀爀椀漀崀 倀刀䤀䴀䄀刀夀 䬀䔀夀 䌀䰀唀匀吀䔀刀䔀䐀 ഀഀ
(਍ऀ嬀渀椀搀甀猀甀愀爀椀漀崀 䄀匀䌀ഀഀ
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]਍⤀ 伀一 嬀倀刀䤀䴀䄀刀夀崀ഀഀ
GO਍匀䔀吀 䄀一匀䤀开倀䄀䐀䐀䤀一䜀 伀䘀䘀ഀഀ
GO਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开唀猀甀愀爀椀漀崀 伀一ഀഀ
INSERT [dbo].[GC_Usuario] ([nidusuario], [cusuario], [ccontrasena], [nestado], [nactivar], [nidpersona]) VALUES (1, N'mgarcia', N'e10adc3949ba59abbe56e057f20f883e', 1, 1, 1)਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开唀猀甀愀爀椀漀崀 伀䘀䘀ഀഀ
/****** Object:  Table [dbo].[GC_Persona]    Script Date: 06/07/2013 17:39:00 ******/਍匀䔀吀 䄀一匀䤀开一唀䰀䰀匀 伀一ഀഀ
GO਍匀䔀吀 儀唀伀吀䔀䐀开䤀䐀䔀一吀䤀䘀䤀䔀刀 伀一ഀഀ
GO਍匀䔀吀 䄀一匀䤀开倀䄀䐀䐀䤀一䜀 伀一ഀഀ
GO਍䌀刀䔀䄀吀䔀 吀䄀䈀䰀䔀 嬀搀戀漀崀⸀嬀䜀䌀开倀攀爀猀漀渀愀崀⠀ഀഀ
	[nidpersona] [int] IDENTITY(1,1) NOT NULL,਍ऀ嬀挀愀瀀攀氀氀椀搀漀猀崀 嬀瘀愀爀挀栀愀爀崀⠀㠀　⤀ 一唀䰀䰀Ⰰഀഀ
	[cnombres] [varchar](60) NULL,਍ऀ嬀挀搀渀椀崀 嬀瘀愀爀挀栀愀爀崀⠀㠀⤀ 一唀䰀䰀Ⰰഀഀ
	[nidsexo] [int] NULL,਍ऀ嬀搀昀攀挀栀渀愀挀崀 嬀搀愀琀攀崀 一唀䰀䰀Ⰰഀഀ
	[ctelefono] [varchar](9) NULL,਍ऀ嬀挀挀漀爀爀攀漀崀 嬀瘀愀爀挀栀愀爀崀⠀㔀　⤀ 一唀䰀䰀Ⰰഀഀ
	[nidestado] [int] NULL,਍ 䌀伀一匀吀刀䄀䤀一吀 嬀倀䬀开䜀䌀开倀攀爀猀漀渀愀崀 倀刀䤀䴀䄀刀夀 䬀䔀夀 䌀䰀唀匀吀䔀刀䔀䐀 ഀഀ
(਍ऀ嬀渀椀搀瀀攀爀猀漀渀愀崀 䄀匀䌀ഀഀ
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]਍⤀ 伀一 嬀倀刀䤀䴀䄀刀夀崀ഀഀ
GO਍匀䔀吀 䄀一匀䤀开倀䄀䐀䐀䤀一䜀 伀䘀䘀ഀഀ
GO਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开倀攀爀猀漀渀愀崀 伀一ഀഀ
INSERT [dbo].[GC_Persona] ([nidpersona], [capellidos], [cnombres], [cdni], [nidsexo], [dfechnac], [ctelefono], [ccorreo], [nidestado]) VALUES (1, N'Garcia Zarate', N'Marlon', N'43501923', 2, CAST(0x27100B00 AS Date), N'943060589', N'acuario262@hotmail.com', 1)਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开倀攀爀猀漀渀愀崀 伀䘀䘀ഀഀ
/****** Object:  Table [dbo].[GC_OpcionDetalle]    Script Date: 06/07/2013 17:39:00 ******/਍匀䔀吀 䄀一匀䤀开一唀䰀䰀匀 伀一ഀഀ
GO਍匀䔀吀 儀唀伀吀䔀䐀开䤀䐀䔀一吀䤀䘀䤀䔀刀 伀一ഀഀ
GO਍䌀刀䔀䄀吀䔀 吀䄀䈀䰀䔀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀䐀攀琀愀氀氀攀崀⠀ഀഀ
	[nidopcdetalle] [int] IDENTITY(1,1) NOT NULL,਍ऀ嬀渀椀搀漀瀀挀椀漀渀崀 嬀椀渀琀崀 一唀䰀䰀Ⰰഀഀ
	[nidusuario] [int] NULL,਍ऀ嬀渀椀搀攀洀瀀漀昀椀挀崀 嬀椀渀琀崀 一唀䰀䰀Ⰰഀഀ
	[nestado] [int] NULL,਍ 䌀伀一匀吀刀䄀䤀一吀 嬀倀䬀开䜀䌀开伀瀀挀椀漀渀䐀攀琀愀氀氀攀崀 倀刀䤀䴀䄀刀夀 䬀䔀夀 䌀䰀唀匀吀䔀刀䔀䐀 ഀഀ
(਍ऀ嬀渀椀搀漀瀀挀搀攀琀愀氀氀攀崀 䄀匀䌀ഀഀ
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]਍⤀ 伀一 嬀倀刀䤀䴀䄀刀夀崀ഀഀ
GO਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀䐀攀琀愀氀氀攀崀 伀一ഀഀ
INSERT [dbo].[GC_OpcionDetalle] ([nidopcdetalle], [nidopcion], [nidusuario], [nidempofic], [nestado]) VALUES (1, 1, 1, 1, 1)਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀䐀攀琀愀氀氀攀崀 ⠀嬀渀椀搀漀瀀挀搀攀琀愀氀氀攀崀Ⰰ 嬀渀椀搀漀瀀挀椀漀渀崀Ⰰ 嬀渀椀搀甀猀甀愀爀椀漀崀Ⰰ 嬀渀椀搀攀洀瀀漀昀椀挀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㈀Ⰰ ㄀Ⰰ ㄀Ⰰ ㈀Ⰰ ㄀⤀ഀഀ
SET IDENTITY_INSERT [dbo].[GC_OpcionDetalle] OFF਍⼀⨀⨀⨀⨀⨀⨀ 伀戀樀攀挀琀㨀  吀愀戀氀攀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀崀    匀挀爀椀瀀琀 䐀愀琀攀㨀 　㘀⼀　㜀⼀㈀　㄀㌀ ㄀㜀㨀㌀㤀㨀　　 ⨀⨀⨀⨀⨀⨀⼀ഀഀ
SET ANSI_NULLS ON਍䜀伀ഀഀ
SET QUOTED_IDENTIFIER ON਍䜀伀ഀഀ
SET ANSI_PADDING ON਍䜀伀ഀഀ
CREATE TABLE [dbo].[GC_Opcion](਍ऀ嬀渀椀搀漀瀀挀椀漀渀崀 嬀椀渀琀崀 䤀䐀䔀一吀䤀吀夀⠀㄀Ⰰ㄀⤀ 一伀吀 一唀䰀䰀Ⰰഀഀ
	[copcion] [varchar](30) NULL,਍ऀ嬀挀瘀愀氀漀爀崀 嬀椀渀琀崀 一唀䰀䰀Ⰰഀഀ
	[cruta] [varchar](80) NULL,਍ऀ嬀挀瘀椀渀攀琀愀崀 嬀瘀愀爀挀栀愀爀崀⠀㄀　⤀ 一唀䰀䰀Ⰰഀഀ
	[nestado] [int] NULL,਍ 䌀伀一匀吀刀䄀䤀一吀 嬀倀䬀开䜀䌀开伀瀀挀椀漀渀崀 倀刀䤀䴀䄀刀夀 䬀䔀夀 䌀䰀唀匀吀䔀刀䔀䐀 ഀഀ
(਍ऀ嬀渀椀搀漀瀀挀椀漀渀崀 䄀匀䌀ഀഀ
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]਍⤀ 伀一 嬀倀刀䤀䴀䄀刀夀崀ഀഀ
GO਍匀䔀吀 䄀一匀䤀开倀䄀䐀䐀䤀一䜀 伀䘀䘀ഀഀ
GO਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀崀 伀一ഀഀ
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (1, N'Inicio', 0, N'#', N'', 1)਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀崀 ⠀嬀渀椀搀漀瀀挀椀漀渀崀Ⰰ 嬀挀漀瀀挀椀漀渀崀Ⰰ 嬀挀瘀愀氀漀爀崀Ⰰ 嬀挀爀甀琀愀崀Ⰰ 嬀挀瘀椀渀攀琀愀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㈀Ⰰ 一✀䴀愀渀琀攀渀攀搀漀爀攀猀✀Ⰰ 　Ⰰ 一✀⌀✀Ⰰ 一✀✀Ⰰ ㄀⤀ഀഀ
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (3, N'Sucursal', 2, N'intranet/mant/sucursal', N'', 1)਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀崀 ⠀嬀渀椀搀漀瀀挀椀漀渀崀Ⰰ 嬀挀漀瀀挀椀漀渀崀Ⰰ 嬀挀瘀愀氀漀爀崀Ⰰ 嬀挀爀甀琀愀崀Ⰰ 嬀挀瘀椀渀攀琀愀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㐀Ⰰ 一✀䔀洀瀀爀攀猀愀✀Ⰰ ㈀Ⰰ 一✀椀渀琀爀愀渀攀琀⼀洀愀渀琀⼀攀洀瀀爀攀猀愀✀Ⰰ 一✀✀Ⰰ ㄀⤀ഀഀ
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (5, N'Conf. del Sistema', 0, N'#', N'', 1)਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀崀 ⠀嬀渀椀搀漀瀀挀椀漀渀崀Ⰰ 嬀挀漀瀀挀椀漀渀崀Ⰰ 嬀挀瘀愀氀漀爀崀Ⰰ 嬀挀爀甀琀愀崀Ⰰ 嬀挀瘀椀渀攀琀愀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㘀Ⰰ 一✀倀攀爀猀漀渀愀✀Ⰰ 㔀Ⰰ 一✀椀渀琀爀愀渀攀琀⼀挀漀渀昀⼀瀀攀爀猀漀渀愀✀Ⰰ 一✀✀Ⰰ ㄀⤀ഀഀ
INSERT [dbo].[GC_Opcion] ([nidopcion], [copcion], [cvalor], [cruta], [cvineta], [nestado]) VALUES (7, N'Usuario', 5, N'intranet/conf/usuario', N'', 1)਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀瀀挀椀漀渀崀 伀䘀䘀ഀഀ
/****** Object:  Table [dbo].[GC_Oficina]    Script Date: 06/07/2013 17:39:00 ******/਍匀䔀吀 䄀一匀䤀开一唀䰀䰀匀 伀一ഀഀ
GO਍匀䔀吀 儀唀伀吀䔀䐀开䤀䐀䔀一吀䤀䘀䤀䔀刀 伀一ഀഀ
GO਍匀䔀吀 䄀一匀䤀开倀䄀䐀䐀䤀一䜀 伀一ഀഀ
GO਍䌀刀䔀䄀吀䔀 吀䄀䈀䰀䔀 嬀搀戀漀崀⸀嬀䜀䌀开伀昀椀挀椀渀愀崀⠀ഀഀ
	[nidoficina] [int] IDENTITY(1,1) NOT NULL,਍ऀ嬀挀漀昀椀挀椀渀愀崀 嬀瘀愀爀挀栀愀爀崀⠀㔀　⤀ 一唀䰀䰀Ⰰഀഀ
	[calias] [varchar](10) NULL,਍ऀ嬀渀攀猀琀愀搀漀崀 嬀椀渀琀崀 一唀䰀䰀Ⰰഀഀ
 CONSTRAINT [PK_GC_Oficina] PRIMARY KEY CLUSTERED ਍⠀ഀഀ
	[nidoficina] ASC਍⤀圀䤀吀䠀 ⠀倀䄀䐀开䤀一䐀䔀堀  㴀 伀䘀䘀Ⰰ 匀吀䄀吀䤀匀吀䤀䌀匀开一伀刀䔀䌀伀䴀倀唀吀䔀  㴀 伀䘀䘀Ⰰ 䤀䜀一伀刀䔀开䐀唀倀开䬀䔀夀 㴀 伀䘀䘀Ⰰ 䄀䰀䰀伀圀开刀伀圀开䰀伀䌀䬀匀  㴀 伀一Ⰰ 䄀䰀䰀伀圀开倀䄀䜀䔀开䰀伀䌀䬀匀  㴀 伀一⤀ 伀一 嬀倀刀䤀䴀䄀刀夀崀ഀഀ
) ON [PRIMARY]਍䜀伀ഀഀ
SET ANSI_PADDING OFF਍䜀伀ഀഀ
SET IDENTITY_INSERT [dbo].[GC_Oficina] ON਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀昀椀挀椀渀愀崀 ⠀嬀渀椀搀漀昀椀挀椀渀愀崀Ⰰ 嬀挀漀昀椀挀椀渀愀崀Ⰰ 嬀挀愀氀椀愀猀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㄀Ⰰ 一✀吀爀甀樀椀氀氀漀✀Ⰰ 一✀吀刀唀✀Ⰰ ㄀⤀ഀഀ
INSERT [dbo].[GC_Oficina] ([nidoficina], [coficina], [calias], [nestado]) VALUES (2, N'Chiclayo', N'CHY', 1)਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀昀椀挀椀渀愀崀 ⠀嬀渀椀搀漀昀椀挀椀渀愀崀Ⰰ 嬀挀漀昀椀挀椀渀愀崀Ⰰ 嬀挀愀氀椀愀猀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㌀Ⰰ 一✀䌀栀椀洀戀漀琀攀✀Ⰰ 一✀䌀䠀䤀✀Ⰰ ㄀⤀ഀഀ
INSERT [dbo].[GC_Oficina] ([nidoficina], [coficina], [calias], [nestado]) VALUES (4, N'Piura', N'PIU', 1)਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开伀昀椀挀椀渀愀崀 伀䘀䘀ഀഀ
/****** Object:  Table [dbo].[GC_Empresas]    Script Date: 06/07/2013 17:39:00 ******/਍匀䔀吀 䄀一匀䤀开一唀䰀䰀匀 伀一ഀഀ
GO਍匀䔀吀 儀唀伀吀䔀䐀开䤀䐀䔀一吀䤀䘀䤀䔀刀 伀一ഀഀ
GO਍匀䔀吀 䄀一匀䤀开倀䄀䐀䐀䤀一䜀 伀一ഀഀ
GO਍䌀刀䔀䄀吀䔀 吀䄀䈀䰀䔀 嬀搀戀漀崀⸀嬀䜀䌀开䔀洀瀀爀攀猀愀猀崀⠀ഀഀ
	[nidempresa] [int] IDENTITY(1,1) NOT NULL,਍ऀ嬀挀攀洀瀀爀攀猀愀崀 嬀瘀愀爀挀栀愀爀崀⠀㌀　⤀ 一唀䰀䰀Ⰰഀഀ
	[calias] [varchar](10) NULL,਍ऀ嬀渀攀猀琀愀搀漀崀 嬀椀渀琀崀 一唀䰀䰀Ⰰഀഀ
 CONSTRAINT [PK_GC_Empresa] PRIMARY KEY CLUSTERED ਍⠀ഀഀ
	[nidempresa] ASC਍⤀圀䤀吀䠀 ⠀倀䄀䐀开䤀一䐀䔀堀  㴀 伀䘀䘀Ⰰ 匀吀䄀吀䤀匀吀䤀䌀匀开一伀刀䔀䌀伀䴀倀唀吀䔀  㴀 伀䘀䘀Ⰰ 䤀䜀一伀刀䔀开䐀唀倀开䬀䔀夀 㴀 伀䘀䘀Ⰰ 䄀䰀䰀伀圀开刀伀圀开䰀伀䌀䬀匀  㴀 伀一Ⰰ 䄀䰀䰀伀圀开倀䄀䜀䔀开䰀伀䌀䬀匀  㴀 伀一⤀ 伀一 嬀倀刀䤀䴀䄀刀夀崀ഀഀ
) ON [PRIMARY]਍䜀伀ഀഀ
SET ANSI_PADDING OFF਍䜀伀ഀഀ
SET IDENTITY_INSERT [dbo].[GC_Empresas] ON਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开䔀洀瀀爀攀猀愀猀崀 ⠀嬀渀椀搀攀洀瀀爀攀猀愀崀Ⰰ 嬀挀攀洀瀀爀攀猀愀崀Ⰰ 嬀挀愀氀椀愀猀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㄀Ⰰ 一✀夀甀最漀䌀漀爀瀀✀Ⰰ 一✀夀䌀✀Ⰰ ㄀⤀ഀഀ
INSERT [dbo].[GC_Empresas] ([nidempresa], [cempresa], [calias], [nestado]) VALUES (2, N'YugoFrio', N'YF', 1)਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开䔀洀瀀爀攀猀愀猀崀 ⠀嬀渀椀搀攀洀瀀爀攀猀愀崀Ⰰ 嬀挀攀洀瀀爀攀猀愀崀Ⰰ 嬀挀愀氀椀愀猀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㌀Ⰰ 一✀䜀爀甀瀀漀 䐀一✀Ⰰ 一✀䜀䐀一✀Ⰰ ㄀⤀ഀഀ
SET IDENTITY_INSERT [dbo].[GC_Empresas] OFF਍⼀⨀⨀⨀⨀⨀⨀ 伀戀樀攀挀琀㨀  吀愀戀氀攀 嬀搀戀漀崀⸀嬀䜀䌀开䔀洀瀀爀攀猀愀开伀昀椀挀椀渀愀崀    匀挀爀椀瀀琀 䐀愀琀攀㨀 　㘀⼀　㜀⼀㈀　㄀㌀ ㄀㜀㨀㌀㤀㨀　　 ⨀⨀⨀⨀⨀⨀⼀ഀഀ
SET ANSI_NULLS ON਍䜀伀ഀഀ
SET QUOTED_IDENTIFIER ON਍䜀伀ഀഀ
CREATE TABLE [dbo].[GC_Empresa_Oficina](਍ऀ嬀渀椀搀攀洀瀀漀昀椀挀崀 嬀椀渀琀崀 䤀䐀䔀一吀䤀吀夀⠀㄀Ⰰ㄀⤀ 一伀吀 一唀䰀䰀Ⰰഀഀ
	[nidempresa] [int] NULL,਍ऀ嬀渀椀搀漀昀椀挀椀渀愀崀 嬀椀渀琀崀 一唀䰀䰀Ⰰഀഀ
	[nestado] [int] NULL,਍ 䌀伀一匀吀刀䄀䤀一吀 嬀倀䬀开䜀䌀开䔀洀瀀爀攀猀愀开伀昀椀挀椀渀愀崀 倀刀䤀䴀䄀刀夀 䬀䔀夀 䌀䰀唀匀吀䔀刀䔀䐀 ഀഀ
(਍ऀ嬀渀椀搀攀洀瀀漀昀椀挀崀 䄀匀䌀ഀഀ
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]਍⤀ 伀一 嬀倀刀䤀䴀䄀刀夀崀ഀഀ
GO਍匀䔀吀 䤀䐀䔀一吀䤀吀夀开䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开䔀洀瀀爀攀猀愀开伀昀椀挀椀渀愀崀 伀一ഀഀ
INSERT [dbo].[GC_Empresa_Oficina] ([nidempofic], [nidempresa], [nidoficina], [nestado]) VALUES (1, 1, 1, 1)਍䤀一匀䔀刀吀 嬀搀戀漀崀⸀嬀䜀䌀开䔀洀瀀爀攀猀愀开伀昀椀挀椀渀愀崀 ⠀嬀渀椀搀攀洀瀀漀昀椀挀崀Ⰰ 嬀渀椀搀攀洀瀀爀攀猀愀崀Ⰰ 嬀渀椀搀漀昀椀挀椀渀愀崀Ⰰ 嬀渀攀猀琀愀搀漀崀⤀ 嘀䄀䰀唀䔀匀 ⠀㈀Ⰰ ㈀Ⰰ ㄀Ⰰ ㄀⤀ഀഀ
SET IDENTITY_INSERT [dbo].[GC_Empresa_Oficina] OFF਍⼀⨀⨀⨀⨀⨀⨀ 伀戀樀攀挀琀㨀  匀琀漀爀攀搀倀爀漀挀攀搀甀爀攀 嬀搀戀漀崀⸀嬀匀倀开匀䜀䌀开匀开嘀愀氀椀搀愀爀甀猀甀愀爀椀漀崀    匀挀爀椀瀀琀 䐀愀琀攀㨀 　㘀⼀　㜀⼀㈀　㄀㌀ ㄀㜀㨀㌀㠀㨀㔀㤀 ⨀⨀⨀⨀⨀⨀⼀ഀഀ
SET ANSI_NULLS ON਍䜀伀ഀഀ
SET QUOTED_IDENTIFIER ON਍䜀伀ഀഀ
CREATE procedure [dbo].[SP_SGC_S_Validarusuario]  ਍䀀愀挀挀椀漀渀 瘀愀爀挀栀愀爀⠀㈀　⤀Ⰰ  ഀഀ
@cusuario varchar(20),  ਍䀀挀漀渀琀爀愀猀攀渀愀 瘀愀爀挀栀愀爀⠀㔀　⤀  ഀഀ
as  ਍椀昀 ⠀䀀愀挀挀椀漀渀㴀✀氀漀最椀渀✀⤀  ഀഀ
begin  ਍猀攀氀攀挀琀 琀漀瀀 ㄀  ഀഀ
usu.nidusuario,usu.cusuario,per.nidpersona,per.capellidos,per.cnombres  ਍昀爀漀洀 䜀䌀开唀猀甀愀爀椀漀 甀猀甀   ഀഀ
inner join GC_Persona per on usu.nidpersona=per.nidpersona  ਍眀栀攀爀攀 甀猀甀⸀挀甀猀甀愀爀椀漀㴀䀀挀甀猀甀愀爀椀漀   ഀഀ
and usu.ccontrasena=@contrasena   ਍愀渀搀 甀猀甀⸀渀攀猀琀愀搀漀㴀✀㄀✀  ഀഀ
end਍䜀伀ഀഀ
