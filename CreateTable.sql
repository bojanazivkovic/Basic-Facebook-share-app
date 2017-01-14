USE [NovoNordisk]
GO

/****** Object:  Table [dbo].[Phrases]    Script Date: 10/09/2012 16:04:10 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[Phrases](
	[PhraseID] [int] NOT NULL,
	[OrderNumber] [smallint] NOT NULL,
	[PhraseText] [nvarchar](max) NOT NULL,
	[CreateDate] [datetime] NOT NULL,
	[ModifiedDate] [datetime] NOT NULL,
 CONSTRAINT [PK_Phrases] PRIMARY KEY CLUSTERED 
(
	[PhraseID] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO


